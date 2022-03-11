<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeoplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peoples', function (Blueprint $table) {
            $table->id();
            $table->string('fristName');
            $table->string('lastName');
             $table->string('middlename');
             $table->string('profile_picture');
             $table->string('kebele');
             $table->string('wereda');
             $table->string('zone');
             $table->string('state');
             $table->string('age');
             $table->string('fingerPrint');
             $table->string('face_id');
             $table->string('job');
             $table->string('status');
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
        Schema::dropIfExists('peoples');
    }
}
