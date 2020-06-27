<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('families', function (Blueprint $table) {

            $table->increments('id');

            $table->string('name')
                  ->nullable();

            $table->string('display_name')
                  ->nullable();

            $table->string('description')
                  ->nullable();


            $table->timestamps();

        });


        Schema::create('categories', function (Blueprint $table) {

            $table->increments('id');

            $table->string('name')
                  ->nullable();

            $table->string('display_name')
                  ->nullable();

            $table->string('description')
                  ->nullable();

            $table->string('img_path')
                  ->nullable();

            $table->string('icon_path')
                  ->nullable();

            $table->integer('family_id')
                  ->unsigned()
                  ->nullable();

            $table->foreign('family_id')
                  ->references('id')
                  ->on('families')
                  ->onDelete('cascade');

            $table->timestamps();

        });


        Schema::create('articles', function (Blueprint $table) {

            $table->increments('id');

            $table->string('name')
                  ->nullable();

            $table->string('slug')
                  ->nullable();

            $table->string('code')
                  ->nullable();

            $table->integer('is_trend')
                  ->nullable();

            $table->text('description')
                  ->nullable();

            $table->text('specs')
                  ->nullable();

            $table->integer('category_id')
                   ->nullable()
                   ->unsigned();

            $table->foreign('category_id')
                  ->references('id')
                  ->on('categories')
                  ->onDelete('cascade');

            $table->integer('family_id')
                  ->nullable()
                  ->unsigned();

            $table->foreign('family_id')
                  ->references('id')
                  ->on('families')
                  ->onDelete('cascade');

            $table->timestamps();

        });


        Schema::create('aplications', function (Blueprint $table) {

            $table->increments('id');

            $table->string('name')
                  ->nullable();

            $table->string('display_name')
                  ->nullable();

            $table->longText('description')
                  ->nullable();

            $table->string('img_path')
                  ->nullable();

            $table->string('pdf_path')
                  ->nullable();

            $table->string('svg_path')
                  ->nullable();

            $table->integer('family_id')
                  ->unsigned()
                  ->nullable();

            $table->foreign('family_id')
                  ->references('id')
                  ->on('families')
                  ->onDelete('cascade');

            $table->timestamps();

        });

        Schema::create('article_aplication', function (Blueprint $table) {

            $table->increments('id');

            $table->integer('article_id')
                  ->unsigned();

            $table->foreign('article_id')
                  ->references('id')
                  ->on('articles')
                  ->onDelete('cascade');

            $table->integer('aplication_id')
                  ->unsigned();

            $table->foreign('aplication_id')
                   ->references('id')
                   ->on('aplications')
                   ->onDelete('cascade');

            $table->string('img_path')
            ->nullable();

            $table->timestamps();
        });

        Schema::create('article_mensaje', function (Blueprint $table) {

            $table->increments('id');

            $table->integer('article_id')
                  ->unsigned();

            $table->foreign('article_id')
                  ->references('id')
                  ->on('articles')
                  ->onDelete('cascade');

            $table->integer('mensaje_id')
                  ->unsigned();

            $table->foreign('mensaje_id')
                   ->references('id')
                   ->on('mensajes')
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
        Schema::dropIfExists('article_mensaje');

        Schema::dropIfExists('article_aplication');

        Schema::dropIfExists('aplications');

        Schema::dropIfExists('articles');

        Schema::dropIfExists('brands');

        Schema::dropIfExists('categories');

        Schema::dropIfExists('families');

    }
}
