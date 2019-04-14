<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\produkModel;
use App\subKategoriModel;

class produkController extends Controller
{
    public function index(Request $request)
    {
        //mendefinisikan kata kunci
        $cari = $request->q;
    
        //mencari data di database
        $dataproduk = produkModel::with(['subkategoriModel', 'detailModel'])
        ->when($request->keyword, function ($query) use ($request) {
            $query->where('nama', 'like', "%{$request->keyword}%");
                // ->orWhere('name', 'like', "%{$request->keyword}%");
        })->get();
        return view('dashboard.produk', compact('dataproduk'));

    }

    public function create()
    {
        //
        $dataproduk = produkModel::with(['subkategoriModel', 'detailModel'])->get();
        $data = subkategoriModel::all();
        return view('crudproduk.createproduk', compact('dataproduk','data'));
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
		$produk = produkModel::all();
		$subkategori = subkategoriModel::all();
		$data = produkModel::where('idProduk', $idProduk)->get();
		return view('crudproduk.editproduk', compact('produk','subkategori', 'data'));
		
        // $dataproduk = DB::table('produk')->where('idProduk',$idProduk)->get();
        // $sub_kategori = DB::table('sub_kategori')->get();
    }

    public function update(Request $request, $idProduk)
    {
        
        //
        if(!empty($request->file('gambar'))){

            $file       = $request->file('gambar');
            $fileName   = $file->getClientOriginalName();
            $request->file('gambar')->move("image/", $fileName);

            produkModel::where('idProduk',$idProduk)->update([
            
                'idSubKategori' => $request->idSubKategori,
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'stok' => $request->stok,
                'harga' => $request->harga,
                'gambar' => $fileName
            ]);
        }else{
            produkModel::where('idProduk',$idProduk)->update([
            
                'idSubKategori' => $request->idSubKategori,
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'stok' => $request->stok,
                'harga' => $request->harga
            ]);
        }

        return redirect()->route('produk.index');
    }

    public function destroy($idProduk)
    {
		$data=produkModel::find($idProduk);
		$data->delete();
        return redirect('produk');
    }
}
