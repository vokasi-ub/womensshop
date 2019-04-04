<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\produkModel;

class produkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //mendefinisikan kata kunci
        $cari = $request->q;
        //mencari data di database
        $dataproduk = DB::table('produk')
        ->where('nama','like',"%".$cari."%")
        ->paginate();
        //return data ke view
        return view('dashboard.produk', compact('dataproduk'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $dataproduk = DB::table('sub_kategori')->get();
        return view('crudproduk.createproduk', compact('dataproduk'));
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
        DB::table('produk')->insert([
            'idSubKategori' => $request->idSubKategori,
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'stok' => $request->stok,
            'harga' => $request->harga,
            'gambar' => $request->gambar
          ]);

          return redirect()->route('produk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idProduk)
    {
        //
        return view('crudproduk.createproduk');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idProduk)
    {
        //
        $dataproduk = DB::table('produk')->where('idProduk',$idProduk)->get();
        return view('crudproduk.editproduk', compact('dataproduk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idProduk)
    {
        //
        DB::table('produk')->where('idProduk',$idProduk)->update([
           
            'idSubKategori' => $request->idSubKategori,
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'stok' => $request->stok,
            'harga' => $request->harga,
            'gambar' => $request->gambar
        ]);
        return redirect()->route('produk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idProduk)
    {
        //
        DB::table('produk')->where('idProduk', $idProduk)->delete();
        return redirect('produk');
    }
}
