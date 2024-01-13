<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VisiMisi;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class VisiMisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $misi = VisiMisi::where('type', 1)->orderBy('id', 'desc')->get();

        $data = [
            'misi' => $misi,
        ];

        return view('visi_misi.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('visi_misi.create');
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
            $visi_misi = new VisiMisi();
            $visi_misi->name = $request->name ?? $request->title;
            $visi_misi->type = $request->type ?? 1;
            $visi_misi->title = $request->title;
            $visi_misi->slug = Str::slug($request->title);
            $visi_misi->text = $request->text;
            $format = $request->file('image')->getClientOriginalName();
            $name = Str::random(11);
            $newName = $name . $format;
            $request->file('image')->move(public_path() . '/galeri', $newName);
            $visi_misi->image = $newName;
            // $visi_misi->status = 1;

            if ($visi_misi->save()) {
                $request->session()->flash('alert', 'success');
                $request->session()->flash('message', 'Visi Misi created successfully');

                DB::commit();
                return redirect()->to(route('visi-misi.index'));
            }
        } catch (\Exception $e) {
            throw $e;
            return redirect()->to(route('visi-misi.index'));
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
        $visi_misi = VisiMisi::find($id);

        $data = [
            'visi_misi' => $visi_misi
        ];

        return view('visi_misi.edit', $data);
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
            $visi_misi = VisiMisi::find($id);
            $visi_misi->name = $request->name ?? $request->title;
            $visi_misi->type = $request->type ?? 1;
            $visi_misi->title = $request->title;
            $visi_misi->slug = Str::slug($request->title);
            $visi_misi->text = $request->text;
            if ($request->hasFile('image')) {
                $format = $request->file('image')->getClientOriginalName();
                $name = Str::random(11);
                $newName = $name . $format;
                $request->file('image')->move(public_path() . '/galeri', $newName);
                $visi_misi->image = $newName;
            }
            // $visi_misi->status = 1;

            if ($visi_misi->save()) {
                $request->session()->flash('alert', 'success');
                $request->session()->flash('message', 'Visi Misi updated successfully');

                DB::commit();
                return redirect()->to(route('visi-misi.index'));
            }
        } catch (\Exception $e) {
            throw $e;
            return redirect()->to(route('visi-misi.index'));
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
        $visi_misi = VisiMisi::find($id);

        if ($visi_misi->delete()) {
            $request->session()->flash('alert', 'success');
            $request->session()->flash('message', 'Visi Misi deleted successfully');
            return redirect()->to(route('visi-misi.index'));
        }
    }
}
