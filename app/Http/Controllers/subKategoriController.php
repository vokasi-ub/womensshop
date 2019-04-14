<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\subkategoriModel;
use App\kategoriModel;

class subKategoriController extends Controller
{
    
    public function index(Request $request)
    {
        //
        //mendefinisikan kata kunci
        $cari = $request->q;
        //mencari data di database
        $datasub = subkategoriModel::with(['kategoriModel', 'produkModel'])
        ->when($request->keyword, function($query) use ($request){
            $query->where('namaSub','like', "%{$request->keyword}%");
        })->get();
        //return data ke view
        return view('dashboard.subKategori', compact('datasub'));
    }

    public function create()
    {
        //
        $datasub = subkategoriModel::with(['kategoriModel','produkModel'])->get();
        $data = kategoriModel::all();
        return view('crudsub.createsub', compact('datasub', 'data'));
    }

    public function store(Request $request)
    {
        //
        $datasub = subkategoriModel::with(['kategoriModel','produkModel'])
        ->insert(['idKategori' => $request->idKategori,
                    'namaSub' => $request->namaSub]);
        // DB::table('sub_kategori')->insert(['idKategori' => $request->idKategori,
        //     'namaSub' => $request->namaSub]);
        return redirect()->route('subkategori.index');
    }

    public function show($idSubKategori)
    {
        //
        return view('crudsub.createsub');
    }

    public function edit($idSubKategori)
    {
        $subkategori = subkategoriModel::all();
        $kategori = kategoriModel::all();
        $data = subkategoriModel::where('idSubKategori', $idSubKategori)->get();
        return view('crudsub.editsub', compact('subkategori', 'kategori', 'data'));
    }

    public function update(Request $request)
    {
        //
        $data = subkategoriModel::find($request->idSubKategori);
        $data->idKategori = $request->idKategori;
        $data->namaSub = $request->namaSub;
        $data->save();
        return redirect('subkategori');
    }

    public function destroy($idSubKategori)
    {
        //
        $data=subkategoriModel::find($idSubKategori);
        $data->delete();
        return redirect('subkategori');
    }
}
