<?php

namespace App\Http\Controllers;

use App\Aspirasi;
use App\Mail\AspirasiMail;
use App\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AspirasiController extends Controller
{

    public function index()
    {

        $aspirasi = Aspirasi::orderBy('id', 'desc')->get();

        return view('aspirasi.index', [
            'aspirasi' => $aspirasi
        ]);
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $aspirasi = new Aspirasi();
            $aspirasi->id_prodi = 1;
            $aspirasi->prodi = $request->prodi;
            $aspirasi->jenis = $request->jenis ?? 0;
            $aspirasi->nama = $request->nama;
            $aspirasi->no_hp = $request->no_hp;
            $aspirasi->alamat = $request->alamat;
            // $aspirasi-> = $request->;
            $aspirasi->nim = $request->nim;
            $aspirasi->email = $request->email;
            $aspirasi->angkatan = $request->angkatan;
            $aspirasi->lingkup_aspirasi = $request->lingkup_aspirasi;
            $aspirasi->sasaran_aspirasi = $request->sasaran_aspirasi;
            $aspirasi->pesan = $request->pesan;
            $aspirasi->pekerjaan = $request->pekerjaan;

            if ($request->hasFile('lampiran')) {
                $format = $request->file('lampiran')->getClientOriginalName();
                $name = Str::random(11);
                $newName = $name . $format;
                $request->file('lampiran')->move(public_path() . '/galeri', $newName);
                $aspirasi->lampiran = $newName;
            }

            $aspirasi->save();
            foreach (Settings::all() as $set) {
                $settings[$set->name] = $set->text;
            }
            $payload = [
                'row' => $aspirasi
            ];
            Mail::to($settings['email'])->send(new AspirasiMail($payload));
            DB::commit();

            return redirect()->back();
        } catch (\Exception $err) {
            DB::rollBack();
            throw $err;
            Log::info($err);

            return redirect()->back();
        }
    }

    public function balas(Request $request)
    {
        DB::beginTransaction();
        try {

            $aspirasi = Aspirasi::find($request->id);
            if ($aspirasi) {
                $aspirasi->balasan = $request->balasan;

                $aspirasi->save();

                $request->session()->flash('alert', 'success');
                $request->session()->flash('message', 'Aspirasi Berhasil Dibalas');

                DB::commit();
                return back();
            }

            $request->session()->flash('alert', 'warning');
            $request->session()->flash('message', 'Aspirasi tidak ditemukan');
            return redirect()->back();
        } catch (\Exception $err) {
            DB::rollBack();
            throw $err;

            return redirect()->back();
        }
    }


    public function destroy(Request $request, $id)
    {
        $prodi = Aspirasi::find($id);

        if ($prodi->delete()) {
            $request->session()->flash('alert', 'success');
            $request->session()->flash('message', 'Aspirasi deleted successfully');
            return redirect()->to(route('aspirasi.index'));
        }
    }
}
