<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SubCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   Schema::create('sub_categories',function(Blueprint $table){
        $table->increments('id');
        $table->string('title');
        $table->integer('category_id')->unsigned();
        $table->foreign('category_id')->references('id')->on('categories');

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
