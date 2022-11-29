<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('post_title');
            $table->longText('post_content');
            $table->mediumText('post_excerpt');
            $table->binary('post_feature');
            $table->enum('status', ['post', 'draft']);
            $table->unsignedBigInteger('post_author');
            $table->foreign('post_author')->references('id')->on('users');
            $table->unsignedBigInteger('post_category');
            $table->foreign('post_category')->references('id')->on('categories');
            $table->unsignedBigInteger('post_tag');
            $table->foreign('post_tag')->references('id')->on('tags');
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
        Schema::dropIfExists('posts');
    }
};
