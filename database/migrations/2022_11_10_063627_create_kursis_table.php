<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Tiket;
use App\Models\kursi;
use App\Models\Studio;

class CreateKursisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kursis', function (Blueprint $table) {
            $table->id();
            $table->UnsignedBigInteger('studio_id');
            $table->foreign('studio_id')->references('id')->on('studios')->onDelete('cascade');
            $table->string('nama_kursi');
            $table->enum('status', ['terisi', 'kosong'])->default('kosong');
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
        Schema::dropIfExists('kursis');
    }
}
