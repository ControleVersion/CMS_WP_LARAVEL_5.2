<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('author_id')->unsigned();
			$table->foreign('author_id')->references('id')->on('users')->onDelete('restrict');
			$table->string('title', 150);
			$table->string('slug', 150)->unique();
			$table->text('body');
			$table->string('image')->nullable;
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
        Schema::drop('posts');
    }
}
