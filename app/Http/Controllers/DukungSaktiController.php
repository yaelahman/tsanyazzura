<?php

namespace App\Http\Controllers;

use App\Models\DukungSakti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function edit($id)
    {
        $dukung_sakti = DukungSakti::find($id);

        $data = [
            'data' => $dukung_sakti
        ];

        return view('dukung_sakti.edit', $data);
    }


    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $payload = $request->all();
            unset($payload['_token']);
            unset($payload['_method']);
            DukungSakti::where('id', $id)->update($payload);
            $request->session()->flash('alert', 'success');
            $request->session()->flash('message', 'Data Pendukung updated successfully');

            DB::commit();
            return redirect()->to(route('dukung-sakti.index'));
        } catch (\Exception $e) {
            throw $e;
            return redirect()->to(route('dukung-sakti.index'));
        }
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
