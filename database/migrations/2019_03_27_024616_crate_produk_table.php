<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrateProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('produk', function (Blueprint $table) {
            $table->bigIncrements('idProduk');
            $table->unsignedBigInteger('idSubKategori');
            $table->foreign('idSubKategori')->references('idSubKategori')->on('sub_kategori')->onDelete('cascade');
            $table->string('nama',30);
            $table->longText('deskripsi');
            $table->integer('stok');
            $table->double('harga');
            $table->string('gambar',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('produk');
        $table->dropForeign(['idSubKategori']);
    }
}
