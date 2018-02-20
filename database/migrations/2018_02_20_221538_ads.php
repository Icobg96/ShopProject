<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ads extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
      public function up()
    {
       Schema::create('ads',function(Blueprint $table){
            $table->increments('id');
            $table->string('title');
            $table->double('price');
            $table->text('discription')->nullable();
            $table->string('imagePath')->nullable();
            $table->datetime('add_date');
            $table->integer('user_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users');
            $table->engine='InnoDB';

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
