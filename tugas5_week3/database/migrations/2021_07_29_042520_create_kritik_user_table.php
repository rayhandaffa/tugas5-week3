<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKritikUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kritik_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('kritik_rating');
            $table->text('kritik_komentar');
            $table->unsignedBigInteger('film_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('film_id')->references('id')->on('film');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::drop('kritik_user', function (Blueprint $table){
            $table->dropColumn('id');
            $table->dropColumn('kritik_rating');
            $table->dropColumn('kritik_komentar');
            
            $table->dropForeign(['user_id']);
            $table->dropColumn(['user_id']);
            $table->dropForeign(['film_id']);
            $table->dropColumn(['film_id']);
            
        });
    }
}
