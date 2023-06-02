<?php

namespace App\Http\Controllers;

use App\Aspirasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AspirasiController extends Controller
{
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $aspirasi = new Aspirasi();
            $aspirasi->id_prodi = $request->prodi;
            $aspirasi->nama = $request->nama;
            $aspirasi->nim = $request->nim;
            $aspirasi->email = $request->email;
            $aspirasi->angkatan = $request->angkatan;
            $aspirasi->lingkup_aspirasi = $request->lingkup_aspirasi;
            $aspirasi->sasaran_aspirasi = $request->sasaran_aspirasi;
            $aspirasi->pesan = $request->pesan;

            if ($request->hasFile('lampiran')) {
                $format = $request->file('lampiran')->getClientOriginalName();
                $name = Str::random(11);
                $newName = $name . $format;
                $request->file('lampiran')->move(public_path() . '/galeri', $newName);

                $aspirasi->lampiran = $request->lampiran;
            }

            $aspirasi->save();
            DB::commit();

            return redirect()->back();
        } catch (\Exception $err) {
            DB::rollBack();

            return redirect()->back();
        }
    }
}
