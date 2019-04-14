<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subkategoriModel extends Model
{
    //
    protected $table = 'sub_kategori';
    protected $fillabel = ['idSubKategori','idKategori','namaSub'];
    protected $primaryKey = 'idSubKategori';
    public $timestamps = true;


    public function kategoriModel(){
        return $this->belongsTo(kategoriModel::class,'idKategori', 'idKategori');
    }

    public function produkModel(){
        return $this->hasMany(produkModel::class,'idProduk', 'idProduk');
    }

}