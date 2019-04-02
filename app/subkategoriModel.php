<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subkategoriModel extends Model
{
    //
    protected $table = 'sub_kategori';
    protected $fillabel = ['idSubKategori','idKategori','namaSub'];
    public $timestamps = true;
}