<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->bigIncrements('albumId');
            $table->string('albumName', 50);
            $table->date('dateReleased');
            $table->unsignedBigInteger('artistId');
            $table->unsignedBigInteger('genreId');
            $table->foreign('artistId')->references('artistId')->on('artists')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('genreId')->references('genreId')->on('genres')->onUpdate('cascade')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('albums');
    }
}
