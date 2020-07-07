<?php

use Illuminate\Support\Facades\Schema;
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

            $table->string('title');

            $table->string('slug')
                  ->unique();

            $table->string('img_path')
                  ->nullable();

            $table->longText('body');

            $table->integer('family_id')
                  ->unsigned()
                  ->nullable();

            $table->foreign('family_id')
                  ->references('id')
                  ->on('families')
                  ->onDelete('cascade');

            $table->boolean('is_draft');
            
            $table->timestamps();
        });

        Schema::create('tags', function (Blueprint $table) {

            $table->increments('id');

            $table->string('name')
                  ->nullable();

            $table->string('display_name')
                  ->nullable();

            $table->string('description')
                  ->nullable();

            $table->string('img_path')
                  ->nullable();


            $table->timestamps();

        });

        Schema::create('post_tag', function (Blueprint $table) {

            $table->integer('post_id')
                  ->unsigned()
                  ->nullable();

            $table->foreign('post_id')
                  ->references('id')
                  ->on('posts')
                  ->onDelete('cascade');

            $table->integer('tag_id')
                  ->unsigned()
                  ->nullable();

            $table->foreign('tag_id')
                  ->references('id')
                  ->on('tags')
                  ->onDelete('cascade');

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
        Schema::dropIfExists('post_tag');
        Schema::dropIfExists('tags');
        Schema::dropIfExists('posts');
    }
}
