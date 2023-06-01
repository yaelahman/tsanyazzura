<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Category;
use App\FAQ;
use App\Product;
use App\Settings;
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

        $data = [
            'settings' => $settings,
            'detail' => false,
            'active' => 'visi-misi',
            'visi_misi' => \App\VisiMisi::all(),
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
            'active' => 'kotak-aspirasi'
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
            'active' => 'warta'
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
            'active' => 'tim'
        ];

        return view('home.tim', $data);
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
