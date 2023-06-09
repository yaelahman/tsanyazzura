<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Category;
use App\FAQ;
use App\Product;
use App\Settings;
use App\VisiMisi;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(Request $request)
    {
        $settings = [];
        foreach (Settings::all() as $set) {
            $settings[$set->name] = $set->text;
        }

        $data = [
            'settings' => $settings,
            'detail' => false,
            'active' => null
        ];

        return view('home.index', $data);
    }

    public function tentang(Request $request)
    {
        $settings = [];
        foreach (Settings::all() as $set) {
            $settings[$set->name] = $set->text;
        }

        $data = [
            'settings' => $settings,
            'detail' => false,
            'active' => 'tentang'
        ];

        return view('home.tentang', $data);
    }

    public function visiMisi(Request $request)
    {
        $settings = [];
        foreach (Settings::all() as $set) {
            $settings[$set->name] = $set->text;
        }

        $visi = VisiMisi::where('type', 1)->orderBy('id', 'asc')->get();
        $misi = VisiMisi::where('type', 0)->orderBy('id', 'asc')->get();


        $data = [
            'settings' => $settings,
            'detail' => false,
            'active' => 'visi-misi',
            'misi' => $misi,
            'visi' => $visi,
            'program_kerja' => \App\ProgramKerja::all()
        ];

        return view('home.visi_misi', $data);
    }

    public function kotakAspirasi(Request $request)
    {
        $settings = [];
        foreach (Settings::all() as $set) {
            $settings[$set->name] = $set->text;
        }

        $data = [
            'settings' => $settings,
            'detail' => false,
            'active' => 'kotak-aspirasi',
            'aspirasi' => \App\Aspirasi::orderBy('id', 'desc')->get(),
            'prodi' => \App\Prodi::all(),
        ];

        return view('home.kotak_aspirasi', $data);
    }


    public function warta(Request $request)
    {
        $settings = [];
        foreach (Settings::all() as $set) {
            $settings[$set->name] = $set->text;
        }

        $data = [
            'settings' => $settings,
            'detail' => false,
            'active' => 'warta',
            'galeri' => \App\Galeri::all()
        ];

        return view('home.warta', $data);
    }

    public function tim(Request $request)
    {
        $settings = [];
        foreach (Settings::all() as $set) {
            $settings[$set->name] = $set->text;
        }

        $data = [
            'settings' => $settings,
            'detail' => false,
            'active' => 'tim',
            'tim' => \App\Tim::where('is_utama', false)->get(),
            'kepala' => \App\Tim::where('is_utama', true)->first(),
        ];

        return view('home.tim', $data);
    }

    public function lapak(Request $request)
    {
        $settings = [];
        foreach (Settings::all() as $set) {
            $settings[$set->name] = $set->text;
        }

        $data = [
            'settings' => $settings,
            'detail' => false,
            'active' => 'lapak',
            'products' => \App\Product::where('status', 1)->get(),
        ];

        return view('home.lapak', $data);
    }

    public function lapakDetail(Request $request, $id)
    {
        $settings = [];
        foreach (Settings::all() as $set) {
            $settings[$set->name] = $set->text;
        }

        $data = [
            'settings' => $settings,
            'detail' => false,
            'active' => 'lapak',
            'product' => \App\Product::find($id),
        ];

        return view('home.lapak_detail', $data);
    }

    public function detail(Request $request, $id)
    {
        $products = Product::with(['Image', 'ImageAll'])->where('id', $id);
        $category = Category::all();
        if (isset($request->category)) {
            $products->where('id_category', $request->category);
        }

        $settings = [];
        foreach (Settings::all() as $set) {
            $settings[$set->name] = $set->text;
        }

        $product = $products->first();

        if ($product == null) {
            $request->session()->flash('alert', 'danger');
            $request->session()->flash('message', 'Produk tidak ditemukan !');
            return redirect()->route('landing');
        }

        // dd($products->first());

        $data = [
            'product' => $product,
            'category' => $category,
            'settings' => $settings,
            'banners' => Banner::orderBy('order', 'asc')->get(),
            'detail' => true
        ];
        return view('landing', $data);
    }

    public function faq(Request $request)
    {
        $category = Category::all();

        $settings = [];
        foreach (Settings::all() as $set) {
            $settings[$set->name] = $set->text;
        }

        // dd($products->first());

        $data = [
            'faq' => FAQ::where('status', true)->get(),
            'category' => $category,
            'settings' => $settings,
            'banners' => Banner::orderBy('order', 'asc')->get(),
            'detail' => true
        ];
        return view('faq', $data);
    }
}
