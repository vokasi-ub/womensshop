<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\kategoriModel;

class detailPesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /** return view('dashboard.dashboard'); */

        //mendefinisikan kata kunci
        $cari = $request->q;
        //mencari data di database
        $datadetail = DB::table('detail_pesanan')
        ->where('nama','like',"%".$cari."%")
        ->paginate();
        //return data ke view
        return view('dashboard.detailpesanan', compact('datadetail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datadetail = DB::table('detail_pesanan')->get();
        return view('cruddetail.createdetail', compact('datadetail'));
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
        DB::table('detail_pesanan')->insert([
            'idProduk' => $request->idPesanan,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'tanggal' => $request->tanggal,
            'jumlah' => $request->jumlah,
            'totalHarga' => $request->totalHarga,
          ]);

        return redirect()->route('detailpesanan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idPesanan)
    {
        //
        return view('cruddetail.createdetail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idPesanan)
    {
        //
        $datadetail = DB::table('detail_pesanan')->where('idPesanan',$idPesanan)->get();
        return view('cruddetail.editdetail', compact('datadetail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idPesanan)
    {
        //
        DB::table('detail_pesanan')->where('idPesanan',$idPesanan)->update([
           
            'idProduk' => $request->idProduk,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'tanggal' => $request->tanggal,
            'jumlah' => $request->jumlah,
            'totalHarga' => $request->totalHarga,
        ]);
        return redirect()->route('detailpesanan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idPesanan)
    {
        //
        DB::table('detail_pesanan')->where('idPesanan', $idPesanan)->delete();
        return redirect('detailpesanan');
    }
}
