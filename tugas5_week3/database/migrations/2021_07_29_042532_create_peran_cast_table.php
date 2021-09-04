<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeranCastTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peran_cast', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('nama', 45);
            $table->unsignedBigInteger('film_id');
            $table->unsignedBigInteger('cast_id');
            $table->foreign('film_id')->references('id')->on('film');
            $table->foreign('cast_id')->references('id')->on('cast');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peran_cast');
        // Schema::drop('peran_cast', function (Blueprint $table){
        //     $table->dropColumn('id');
        //     $table->dropForeign(['cast_id']);
        //     $table->dropForeign(['film_id']);
        //     $table->dropColumn(['cast_id']);

        //     $table->dropColumn(['film_id']);
            
        // });
    }
}
