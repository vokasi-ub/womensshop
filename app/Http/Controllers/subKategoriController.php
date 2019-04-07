<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\subkategoriModel;

class subKategoriController extends Controller
{
    
    public function index(Request $request)
    {
        //
        //mendefinisikan kata kunci
        $cari = $request->q;
        //mencari data di database
        $datasub = DB::table('sub_kategori')
        ->where('namaSub','like',"%".$cari."%")
        ->paginate();
        //return data ke view
        return view('dashboard.subKategori', compact('datasub'));
    }

    public function create()
    {
        //
        $datasub = DB::table('kategori')->get();
        return view('crudsub.createsub', compact('datasub'));
    }

    public function store(Request $request)
    {
        //
        DB::table('sub_kategori')->insert(['idKategori' => $request->idKategori,
            'namaSub' => $request->namaSub]);
        return redirect()->route('subkategori.index');
    }

    public function show($idSubKategori)
    {
        //
        return view('crudsub.createsub');
    }

    public function edit($idSubKategori)
    {
        //
        $datasub = DB::table('sub_kategori')->where('idSubKategori',$idSubKategori)->get();
        $kategori = DB::table('kategori')->get();
        return view('crudsub.editsub', compact('datasub','kategori'));
    }

    public function update(Request $request, $idSubKategori)
    {
        //
        DB::table('sub_kategori')->where('idSubKategori',$idSubKategori)->update([
            'idKategori' => $request->idKategori,
            'namaSub' => $request->namaSub,
        ]);
        return redirect('subkategori');
    }

    public function destroy($idSubKategori)
    {
        //
        DB::table('sub_kategori')->where('idSubKategori', $idSubKategori)->delete();
        return redirect('subkategori');
    }
}
