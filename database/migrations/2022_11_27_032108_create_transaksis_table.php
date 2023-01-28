<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('kode_transaksi');
            $table->UnsignedBigInteger('id_costumer');
            $table->foreign('id_costumer')->references('id')->on('users')->onDelete('cascade');
            $table->UnsignedBigInteger('id_movie');
            $table->foreign('id_movie')->references('id')->on('movies')->onDelete('cascade');
            $table->UnsignedBigInteger('id_jadwal'); //dinamik sesuai movie sama kursi juga dinamik
            $table->foreign('id_jadwal')->references('id')->on('jadwals')->onDelete('cascade');
            $table->UnsignedBigInteger('id_kursi'); //dinamik sesuai movie sama kursi juga dinamik
            $table->foreign('id_kursi')->references('id')->on('kursis')->onDelete('cascade');
            $table->integer('banyak');
            $table->integer('total_harga');
            $table->date('tgl_psn');
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
        Schema::dropIfExists('transaksis');
    }
}
