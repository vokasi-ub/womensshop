<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project1Model extends Model
{
    //
    protected $table = 'kategori';
    protected $fillabel = ['idKategori','namaKategori'];
    public $timestamps = true;
}
