<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profiles', function (Blueprint $table) {
            
            $table->integer('age')
            ->nullable()->change();
            $table->string('sex','family','hometown','dislike','beento','comment')->nullable()->change();
            $table->date('birthday')->nullable()->change();
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
        $table->integer('age')
            ->nullable(false)->change();
       $table->string('sex','family','hometown','dislike','beento','comment')->nullable(false)->change();
       $table->date('birthday')->nullable(false)->change();
            
            //
        });
    }
}
