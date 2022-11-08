<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Jadwal;
use App\Models\Movies;
use App\Models\Studio;


class CreateJadwalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id();
            $table->UnsignedBigInteger('id_movie');
            $table->foreign('id_movie')->references('id')->on('movies')->onDelete('cascade');
            $table->UnsignedBigInteger('id_studio');
            $table->foreign('id_studio')->references('id')->on('studios')->onDelete('cascade');
            $table->integer('harga');
            $table->integer('stok');
            $table->date('tgl');
            $table->time('tayang');
            $table->time('selesai');
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
        Schema::dropIfExists('jadwals');
    }
}