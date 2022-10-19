<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Tiket;
use App\Models\kursi;

class CreateTiketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tikets', function (Blueprint $table) {
            $table->id();
            $table->integer('kode');
            $table->integer('stok');
            $table->string('harga');
            $table->UnsignedBigInteger('nk');
            $table->foreign('nk')->references('id')->on('kursis')->onDelete('cascade');
            $table->UnsignedBigInteger('nama');
            $table->foreign('nama')->references('id')->on('movies')->onDelete('cascade');
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
        Schema::dropIfExists('tikets');
    }
}
