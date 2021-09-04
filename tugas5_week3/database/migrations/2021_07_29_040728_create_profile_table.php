<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('umur');
            $table->text('bio');
            $table->char('alamat', 100);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('profile', function (Blueprint $table){
            $table->dropColumn('id');
            $table->dropColumn('bio');
            $table->dropColumn('umur');
            $table->dropColumn('alamat');
            $table->dropForeign(['user_id']);
            $table->dropColumn(['user_id']);
            
        });
    }
}
