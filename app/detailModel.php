<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detailModel extends Model
{
    //
    protected $table = 'detail_pesanan';
    protected $fillabel = ['idPesanan','idProduk','nama','alamat','tanggal','jumlah','totalHarga'];
    public $timestamps = true;

    public function produkModel(){
        return $thid->belongsTo(produkModel::class,'idProduk');
    }
}