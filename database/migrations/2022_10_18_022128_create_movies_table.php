<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Category;
use App\Models\Movies;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('decs');
            $table->string('title_img');
            $table->string('img');
            $table->UnsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('directory');
            $table->string('rilis');
            $table->time('duration');
            $table->integer('rate');
            $table->integer('riviews');
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
        Schema::dropIfExists('movies');
    }
}
