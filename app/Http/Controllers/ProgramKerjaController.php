<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProgramKerja;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProgramKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $program_kerja = ProgramKerja::orderBy('id', 'desc')->get();

        $data = [
            'program_kerja' => $program_kerja
        ];

        return view('program_kerja.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('program_kerja.create');
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
            $program_kerja = new ProgramKerja();
            $program_kerja->name = $request->name ?? $request->title;
            $program_kerja->title = $request->title;
            $program_kerja->slug = Str::slug($request->name);
            $program_kerja->text = $request->text;
            $format = $request->file('image')->getClientOriginalName();
            $name = Str::random(11);
            $newName = $name . $format;
            $request->file('image')->move(public_path() . '/galeri', $newName);
            $program_kerja->image = $newName;


            if ($program_kerja->save()) {
                $request->session()->flash('alert', 'success');
                $request->session()->flash('message', 'Program Kerja created successfully');

                DB::commit();
                return redirect()->to(route('program-kerja.index'));
            }
        } catch (\Exception $e) {
            throw $e;
            return redirect()->to(route('program-kerja.index'));
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
        $program_kerja = ProgramKerja::find($id);

        $data = [
            'program_kerja' => $program_kerja
        ];

        return view('program_kerja.edit', $data);
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
            $program_kerja = ProgramKerja::find($id);
            $program_kerja->name = $request->name ?? $request->title;
            $program_kerja->title = $request->title;
            $program_kerja->slug = Str::slug($request->name);
            $program_kerja->text = $request->text;
            if ($request->hasFile('image')) {
                $format = $request->file('image')->getClientOriginalName();
                $name = Str::random(11);
                $newName = $name . $format;
                $request->file('image')->move(public_path() . '/galeri', $newName);
                $program_kerja->image = $newName;
            }
            // $program_kerja->status = 1;

            if ($program_kerja->save()) {
                $request->session()->flash('alert', 'success');
                $request->session()->flash('message', 'Program Kerja updated successfully');

                DB::commit();
                return redirect()->to(route('program-kerja.index'));
            }
        } catch (\Exception $e) {
            throw $e;
            return redirect()->to(route('program-kerja.index'));
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
        $program_kerja = ProgramKerja::find($id);

        if ($program_kerja->delete()) {
            $request->session()->flash('alert', 'success');
            $request->session()->flash('message', 'Program Kerja deleted successfully');
            return redirect()->to(route('program-kerja.index'));
        }
    }
}
