<?php

namespace App\Http\Controllers;

use App\Models\RekamJejak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RekamJejakController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rekam = RekamJejak::orderBy('id', 'desc')->get();

        $data = [
            'rekam' => $rekam
        ];

        return view('rekam.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rekam.create');
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
            $rekam = new RekamJejak();
            $rekam->text = $request->text;
            // $rekam->status = 1;

            if ($rekam->save()) {
                $request->session()->flash('alert', 'success');
                $request->session()->flash('message', 'Rekam Jejak created successfully');

                DB::commit();
                return redirect()->to(route('rekam.index'));
            }
        } catch (\Exception $e) {
            throw $e;
            return redirect()->to(route('rekam.index'));
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
        $rekam = RekamJejak::find($id);

        $data = [
            'rekam' => $rekam
        ];

        return view('rekam.edit', $data);
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
            $rekam = RekamJejak::find($id);
            $rekam->text = $request->text;
            // $rekam->status = 1;

            if ($rekam->save()) {
                $request->session()->flash('alert', 'success');
                $request->session()->flash('message', 'Rekam Jejak updated successfully');

                DB::commit();
                return redirect()->to(route('rekam.index'));
            }
        } catch (\Exception $e) {
            throw $e;
            return redirect()->to(route('rekam.index'));
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
        $rekam = RekamJejak::find($id);

        if ($rekam->delete()) {
            $request->session()->flash('alert', 'success');
            $request->session()->flash('message', 'Rekam Jejak deleted successfully');
            return redirect()->to(route('rekam.index'));
        }
    }
}
