<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('film', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('judul', 60);
            $table->text('ringkasan');
            $table->integer('year');
            $table->char('poster', 255);
            $table->unsignedBigInteger('genre_id');
            $table->foreign('genre_id')->references('id')->on('genre');
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
        Schema::drop('film', function (Blueprint $table){
            $table->dropColumn('id');
            $table->dropColumn('judul');
            $table->dropColumn('ringkasam');
            $table->dropColumn('year');
            $table->dropColumn('poster');
            $table->dropForeign(['genre_id']);
            $table->dropColumn(['genre_id']);
            
        });
    }
}
