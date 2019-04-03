<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use DataTables;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();

        return view('welcome', compact('mahasiswa'));
    }

    public function get()
    {
        $mahasiswa = Mahasiswa::query();
        return DataTables::of($mahasiswa)
            ->addColumn('option', function ($mahasiswa) {
                return view('button', [
                    'mahasiswa'=> $mahasiswa,
                    'url_show' => route('dataMahasiswa.update', $mahasiswa->id),
                    'url_edit' => route('dataMahasiswa.update', $mahasiswa->id),
                    'url_destroy' => route('dataMahasiswa.update', $mahasiswa->id)
                ]);
            })
         ->addIndexColumn()
         ->rawColumns(['option'])   
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $mahasiswa = new Mahasiswa;
        $mahasiswa->create($request->all());

        return back();
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
        //
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
    

        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update($request->all());

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();

        return back();
    }
}
