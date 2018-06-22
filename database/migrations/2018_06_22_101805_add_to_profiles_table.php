<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddToProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profiles', function (Blueprint $table) {
             $table->integer('user_id')->unsigned()->index();
             $table->integer('age');
             $table->string('sex');
             $table->date('birthday');
             $table->string('family');
             $table->string('hometown');
             $table->string('dislike');
             $table->string('beento');
             $table->string('comment');
             
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
        Schema::table('profiles', function (Blueprint $table) {
            $table->dropColumn(['user_id','age','sex','birthday','family','hometown','dislike','beento','comment']);
            
            //
        });
    }
}
