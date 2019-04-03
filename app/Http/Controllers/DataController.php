<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use DataTables;

class DataController extends Controller
{
    public function index() {
        $mahasiswa = Mahasiswa::all();
        // return Datatables::of($mahasiswa)->make(true);

        return view('welcome', compact('mahasiswa'));
    }

    public function get() {
        $mahasiswa = Mahasiswa::query();
        return DataTables::of($mahasiswa)
            ->addColumn('option', function ($mahasiswa) {
                return view('button', [
                    'mahasiswa'=> $mahasiswa,
                    'url_edit' => route(' editData ', $mahasiswa->id), 
                    'url_destroy' => route(' hapusData ', $mahasiswa->id) 
                ]);
            })
         ->addIndexColumn()
         ->rawColumns(['option'])   
        ->make(true);
    }


    public function tambahData(request $request) {
        $mahasiswa = new Mahasiswa;

        $mahasiswa->nama = $request->nama;
        $mahasiswa->fakultas = $request->fakultas;
        $mahasiswa->prodi = $request->prodi;
        $mahasiswa->save();

        return back();
    }

    public function editData(request $request, $id) {
        $mahasiswa = Mahasiswa::find($id);

        $mahasiswa->nama = $request->nama;
        $mahasiswa->fakultas = $request->fakultas;
        $mahasiswa->prodi = $request->prodi;
        $mahasiswa->save();

        return back();
        
    }

    public function hapusData($id) {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();

        return back();
    }
    
}
