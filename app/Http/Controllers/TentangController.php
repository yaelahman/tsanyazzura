<?php

namespace App\Http\Controllers;

use App\Models\Tentang;
use App\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TentangController extends Controller
{
    public function index()
    {
        $data = [
            'settings' => Settings::orderBy('id', 'asc')->get(),
            'biografi' => Tentang::where('category', 'BIOGRAFI')->first() ?? new Tentang(),
            'pendidikan' => Tentang::where('category', 'PENDIDIKAN')->get(),
            'organisasi' => Tentang::where('category', 'ORGANISASI')->get(),
            'komite' => Tentang::where('category', 'KOMITE')->get(),
            'riwayat_pelatihan' => Tentang::where('category', 'RIWAYAT_PELATIHAN')->get(),
            'riwayat_pembicara' => Tentang::where('category', 'RIWAYAT_PEMBICARA')->get(),
            'prestasi' => Tentang::where('category', 'PRESTASI')->get(),
        ];
        return view('tentang.index', $data);
    }

    public function store(Request $request)
    {
        $tentang = null;
        if ($request->type == 'BIOGRAFI')
            $tentang = Tentang::where('category', 'BIOGRAFI')->first();


        if (!$tentang) {
            $tentang = new Tentang();
        }
        $tentang->category = $request->type;
        if ($request->hasFile('file')) {
            $format = $request->file('file')->getClientOriginalName();
            $name = Str::random(11);
            $newName = $name . date('d_m_y_H_i_s') . $format;
            copy($request->file('file'), public_path() . "//galeri//" . $newName);
            $tentang->image = $newName;
        }
        $tentang->body = $request->body;
        $tentang->title = $request->title;
        $tentang->text = $request->text;
        $tentang->date = $request->date;
        $tentang->save();

        $request->session()->flash('alert', 'success');
        $request->session()->flash('message', 'Tentang updated successfully');
        return redirect()->to(route('tentang.index'));
    }
}
