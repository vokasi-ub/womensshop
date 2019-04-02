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
            $table->string('idProduk',30);
            $table->string('nama');
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
    }
}
