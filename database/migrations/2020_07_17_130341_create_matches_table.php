<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title'); 
            $table->integer('team_a')->nullable(); 
            $table->integer('team_b')->nullable(); 
            $table->integer('winner_team')->nullable(); 
			$table->enum('is_draw', array('N', 'Y'))->default('N');
			//$table->enum('active', array('1','0'))->default('1');
			$table->integer('points_gain')->nullable();
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
        Schema::dropIfExists('matches');
    }
}
