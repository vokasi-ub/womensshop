<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategoriModel extends Model
{
    //
    protected $table = 'kategori';
    protected $fillabel = ['idKategori','namaKategori'];
    public $timestamps = true;
}