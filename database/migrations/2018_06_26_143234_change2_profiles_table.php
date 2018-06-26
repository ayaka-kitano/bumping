<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Change2ProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profiles', function (Blueprint $table) {
              $table->string('family')->nullable()->change();
              $table->string('hometown')->nullable()->change();
              $table->string('dislike')->nullable()->change();
              $table->string('beento')->nullable()->change();
              $table->string('comment')->nullable()->change();
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
 $table->string('family')->nullable(false)->change();           
 $table->string('hometown')->nullable(false)->change();
 $table->string('dislike')->nullable(false)->change();
 $table->string('beento')->nullable(false)->change();
 $table->string('comment')->nullable(false)->change();
 
        });
    }
}
