<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrateSubKategoriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('sub_kategori', function (Blueprint $table) {
            $table->bigIncrements('idSubKategori');
            $table->unsignedBigInteger('idKategori');
            $table->foreign('idKategori')->references('idKategori')->on('kategori')->onDelete('cascade');
            $table->string('namaSub',30);
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
        Schema::dropIfExists('sub_kategori');
        $table->dropForeign(['idKategori']);
    }
}
