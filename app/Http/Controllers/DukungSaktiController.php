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
    public function destroy(Request $request, $id)
    {
        $data = DukungSakti::find($id);

        if ($data->delete()) {
            $request->session()->flash('alert', 'success');
            $request->session()->flash('message', 'Dukung Sakti deleted successfully');
            return redirect()->to(route('dukung-sakti.index'));
        }
    }
}
