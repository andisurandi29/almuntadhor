<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPembayaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pembayaran', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nis');
            $table->String('nama');
            $table->date('tanggal')->nullable();
            $table->String('tagihan');
            $table->String('nominal')->nullable();
            $table->String('bukti')->nullable();
            $table->String('keterangan')->default('Belum diverifikasi');
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
        Schema::dropIfExists('data_pembayaran');
    }
}
