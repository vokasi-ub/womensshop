<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\subkategoriModel;

class subKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('crudsub.createsub');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        DB::table('sub_kategori')->insert(['idKategori' => $request->idKategori,
            'namaSub' => $request->namaSub]);
        return redirect('subKategori');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idSubKategori)
    {
        //
        return view('crudsub.createsub');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idSubKategori)
    {
        //
        $datasub = DB::table('sub_kategori')->where('idSubKategori',$idSubKategori)->get();
        return view('crudsub.editsub', compact('datasub'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idSubKategori)
    {
        //
        DB::table('sub_kategori')->where('idSubKategori',$idSubKategori)->update([
            'namaSub' => $request->namaSub,
        ]);
        return redirect('subKategori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idSubKategori)
    {
        //
        DB::table('sub_kategori')->where('idSubKategori', $idSubKategori)->delete();
        return redirect('subkategori');
    }
}
