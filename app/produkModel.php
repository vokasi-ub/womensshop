<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produkModel extends Model
{
    //
    protected $table = 'produk';
    protected $fillabel = ['idProduk','idSubKategori','nama','deskripsi','stok','harga','gambar'];
    public $timestamps = true;
}