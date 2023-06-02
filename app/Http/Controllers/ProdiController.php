<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prodi;
use Illuminate\Support\Facades\DB;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prodi = Prodi::orderBy('id', 'desc')->get();

        $data = [
            'prodi' => $prodi
        ];

        return view('prodi.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prodi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $prodi = new Prodi();
            $prodi->name = $request->name;
            // $prodi->status = 1;

            if ($prodi->save()) {
                $request->session()->flash('alert', 'success');
                $request->session()->flash('message', 'Prodi created successfully');

                DB::commit();
                return redirect()->to(route('prodi.index'));
            }
        } catch (\Exception $e) {
            throw $e;
            return redirect()->to(route('prodi.index'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prodi = Prodi::find($id);

        $data = [
            'prodi' => $prodi
        ];

        return view('prodi.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $prodi = Prodi::find($id);
            $prodi->name = $request->name;
            // $prodi->status = 1;

            if ($prodi->save()) {
                $request->session()->flash('alert', 'success');
                $request->session()->flash('message', 'Prodi updated successfully');

                DB::commit();
                return redirect()->to(route('prodi.index'));
            }
        } catch (\Exception $e) {
            throw $e;
            return redirect()->to(route('prodi.index'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $prodi = Prodi::find($id);

        if ($prodi->delete()) {
            $request->session()->flash('alert', 'success');
            $request->session()->flash('message', 'Prodi deleted successfully');
            return redirect()->to(route('prodi.index'));
        }
    }
}
