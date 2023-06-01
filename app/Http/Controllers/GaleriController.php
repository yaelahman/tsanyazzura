<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;
use App\Category;
use App\ImageProduct;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeri = Galeri::orderBy('id', 'desc')
            ->get();

        $data = [
            'galeri' => $galeri
        ];

        return view('galeri.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();

        $data = [
            'category' => $category
        ];

        return view('galeri.create', $data);
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
            // dd(public_path() . '/galeri');
            $galeri = new Galeri();
            $format = $request->file('image')->getClientOriginalName();
            $name = Str::random(11);
            $newName = $name . $format;
            $request->file('image')->move(public_path() . '/galeri', $newName);
            $galeri->image = $newName;
            $galeri->title = $request->title;
            $galeri->text = $request->text;

            if ($galeri->save()) {

                $request->session()->flash('alert', 'success');
                $request->session()->flash('message', 'Galeri created successfully');

                DB::commit();
                return redirect()->to(route('galeri.index'));
            }
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
            return redirect()->to(route('galeri.index'));
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
        $galeri = Galeri::find($id);

        $data = [
            'galeri' => $galeri
        ];

        return view('galeri.edit', $data);
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
            $galeri = Galeri::find($id);
            if ($request->image != null) {
                $format = $request->file('image')->getClientOriginalName();
                $name = Str::random(11);
                $newName = $name . $format;
                $request->file('image')->storeAs(
                    'public/galeri',
                    $newName
                );
                $galeri->image = $newName;
            }
            $galeri->title = $request->title;
            $galeri->text = $request->text;

            if ($galeri->save()) {

                $request->session()->flash('alert', 'success');
                $request->session()->flash('message', 'Galeri updated successfully');

                DB::commit();
                return redirect()->to(route('galeri.index'));
            }
        } catch (\Exception $e) {
            throw $e;
            return redirect()->to(route('galeri.index'));
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
        $galeri = Galeri::find($id);

        if ($galeri->delete()) {
            $request->session()->flash('alert', 'success');
            $request->session()->flash('message', 'Galeri deleted successfully');
            return redirect()->to(route('galeri.index'));
        }
    }
}
