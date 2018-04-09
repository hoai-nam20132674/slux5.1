<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Categories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('categorie_id');
            $table->integer('paren_id');
            $table->string('name');
            $table->string('title');
            $table->longText('content');
            $table->string('seo_description');
            $table->string('seo_keyword');
            $table->string('url');
            $table->boolean('display');
            $table->integer('type');
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
        Schema::drop('categories');
    }
}