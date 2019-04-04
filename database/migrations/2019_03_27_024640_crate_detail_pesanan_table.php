<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrateDetailPesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('detail_pesanan', function (Blueprint $table) {
            $table->bigIncrements('idPesanan');
            $table->unsignedBigInteger('idProduk');
            $table->foreign('idProduk')->references('idProduk')->on('produk')->onDelete('cascade');
            $table->string('nama',30);
            $table->longText('alamat');
            $table->timestamp('tanggal')->useCurrent();
            $table->integer('jumlah');
            $table->double('totalHarga');
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
        Schema::dropIfExists('detail_pesanan');
        $table->dropForeign(['idProduk']);
    }
}
