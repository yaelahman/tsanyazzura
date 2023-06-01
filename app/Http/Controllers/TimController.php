<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tim;
use App\Category;
use App\ImageProduct;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tim = Tim::orderBy('id', 'desc')
            ->get();

        $data = [
            'tim' => $tim
        ];

        return view('tim.index', $data);
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

        return view('tim.create', $data);
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
            $tim = new Tim();
            $format = $request->file('image')->getClientOriginalName();
            $name = Str::random(11);
            $newName = $name . $format;
            $request->file('image')->move(public_path() . '/galeri', $newName);
            $tim->image = $newName;
            $tim->name = $request->name;
            $tim->jabatan = $request->jabatan;

            if ($tim->save()) {

                $request->session()->flash('alert', 'success');
                $request->session()->flash('message', 'Tim created successfully');

                DB::commit();
                return redirect()->to(route('tim.index'));
            }
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
            return redirect()->to(route('tim.index'));
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
        $tim = Tim::find($id);

        $data = [
            'tim' => $tim
        ];

        return view('tim.edit', $data);
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
            $tim = GaleriTim($id);
            if ($request->image != null) {
                $format = $request->file('image')->getClientOriginalName();
                $name = Str::random(11);
                $newName = $name . $format;
                $request->file('image')->storeAs(
                    'public/galeri',
                    $newName
                );
                $tim->image = $newName;
            }
            $tim->name = $request->name;
            $tim->jabatan = $request->jabatan;

            if ($tim->save()) {

                $request->session()->flash('alert', 'success');
                $request->session()->flash('message', 'Tim updated successfully');

                DB::commit();
                return redirect()->to(route('tim.index'));
            }
        } catch (\Exception $e) {
            throw $e;
            return redirect()->to(route('tim.index'));
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
        $tim = Tim::find($id);

        if ($tim->delete()) {
            $request->session()->flash('alert', 'success');
            $request->session()->flash('message', 'Tim deleted successfully');
            return redirect()->to(route('tim.index'));
        }
    }
}
