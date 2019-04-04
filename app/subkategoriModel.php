<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subkategoriModel extends Model
{
    //
    protected $table = 'sub_kategori';
    protected $fillabel = ['idSubKategori','idKategori','namaSub'];
    public $timestamps = true;

    public function produkModel(){
        return $this->hasMany(produkModel::class);
    }

    public function kategoriModel(){
        return $this->belongsTo(kategoriModel::class,'idKategori');
    }
}