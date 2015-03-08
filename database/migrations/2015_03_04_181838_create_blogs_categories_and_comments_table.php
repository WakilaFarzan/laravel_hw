<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsCategoriesAndCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
        Schema::create('categories', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title')->default('');
            $table->text('description')->default('');
            $table->string('created_by')->default('');
            $table->timestamps();
        });

        Schema::create('blogs', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('category_id')->unsigned()->default(0);
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('title')->default('');
            $table->text('description')->default('');
            $table->string('tag')->default('');
            $table->boolean('status')->default(false);
            $table->timestamps();
        });

        Schema::create('comments', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('blog_id')->unsigned()->default(0);
            $table->foreign('blog_id')->references('id')->on('blogs')->onDelete('cascade');
            $table->string('name')->default('');
            $table->string('email')->default('');
            $table->text('message')->default('');
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
        Schema::drop('comments');
        Schema::drop('blogs');
        Schema::drop('categories');

    }

}