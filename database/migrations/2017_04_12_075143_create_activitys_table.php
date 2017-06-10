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
            $table->uuid('id');
            $table->string('name');
            $table->string('image');
            $table->string('description');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('time');
            $table->string('place');
            $table->string('participant');
            $table->tinyinteger('status',false);
            $table->uuid('user_id');
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