<?php

namespace App\Http\Controllers;

use App\Models\DukungSakti;
use Illuminate\Http\Request;

class DukungSaktiController extends Controller
{
    public function index()
    {
        $dukung_sakti = DukungSakti::orderBy('id', 'desc')->get();

        $data = [
            'dukung_sakti' => $dukung_sakti
        ];

        return view('dukung_sakti.index', $data);
    }
}
