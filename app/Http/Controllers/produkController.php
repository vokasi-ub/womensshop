<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\produkModel;

class produkController extends Controller
{
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

    public function create()
    {
        //
        $dataproduk = DB::table('sub_kategori')->get();
        return view('crudproduk.createproduk', compact('dataproduk'));
    }

    public function store(Request $request)
    {
        // mengupload gambar
        $file       = $request->file('gambar');
        $fileName   = $file->getClientOriginalName();
        $request->file('gambar')->move("image/", $fileName);
        //
        DB::table('produk')->insert([
            'idSubKategori' => $request->idSubKategori,
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'stok' => $request->stok,
            'harga' => $request->harga,
        // mengupload gambar
            'gambar' => $fileName
          ]);

          return redirect()->route('produk.index');
    }

    public function show($idProduk)
    {
        //
        return view('crudproduk.createproduk');

    }

    public function edit($idProduk)
    {
        //
        $dataproduk = DB::table('produk')->where('idProduk',$idProduk)->get();
        $sub_kategori = DB::table('sub_kategori')->get();
        return view('crudproduk.editproduk', compact('dataproduk','sub_kategori'));
    }

    public function update(Request $request, $idProduk)
    {
        $file       = $request->file('gambar');
        $fileName   = $file->getClientOriginalName();
        $request->file('gambar')->move("image/", $fileName);
        //
        DB::table('produk')->where('idProduk',$idProduk)->update([
           
            'idSubKategori' => $request->idSubKategori,
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'stok' => $request->stok,
            'harga' => $request->harga,
            'gambar' => $fileName
        ]);
        return redirect()->route('produk.index');
    }

    public function destroy($idProduk)
    {
        //
        DB::table('produk')->where('idProduk', $idProduk)->delete();
        return redirect('produk');
    }
}
