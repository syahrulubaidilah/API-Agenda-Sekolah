<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitysTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->string('id');
            $table->string('name');
            $table->string('description');
            $table->string('date_activity');
            $table->string('time');
            $table->string('place');
            $table->string('participant');
            $table->integer('user_id' , false);
            $table->timestamps();
            $table->softDeletes();
            $table->primary('id');
        });
    }
    
    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::drop('activities');
    }
}