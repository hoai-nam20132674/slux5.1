<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BlogsImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs_images', function (Blueprint $table) {
            $table->increments('blog_image_id');
            $table->integer('image_id')->unsigned();
            $table->foreign('image_id')->references('image_id')->on('images')->onDelete('cascade');
            $table->integer('blog_id')->unsigned();
            $table->foreign('blog_id')->references('blog_id')->on('blogs')->onDelete('cascade');
            $table->boolean('represent');
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
        Schema::drop('blogs_images');
    }
}
