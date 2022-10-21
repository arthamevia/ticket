<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Jadwal;
use App\Models\Movies;
use App\Models\Tiket;

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
            $table->UnsignedBigInteger('nama');
            $table->foreign('nama')->references('id')->on('movies')->onDelete('cascade');
            $table->date('tgl');
            $table->time('tayang');
            $table->time('selesai');
            $table->UnsignedBigInteger('kode');
            $table->foreign('kode')->references('id')->on('tikets')->onDelete('cascade');
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
