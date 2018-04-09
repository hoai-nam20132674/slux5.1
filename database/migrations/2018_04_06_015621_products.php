<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('product_id');
            $table->integer('categorie_id')->unsigned();
            $table->foreign('categorie_id')->references('categorie_id')->on('categories')->onDelete('cascade');
            $table->string('name');
            $table->string('price');
            $table->integer('view');
            $table->integer('featured');
            $table->string('title');
            $table->string('description');
            $table->string('seo_description');
            $table->string('seo_keyword');
            $table->string('url');
            $table->boolean('display');
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
        Schema::drop('products');
    }
}