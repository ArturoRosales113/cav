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

        Schema::create('concepts', function (Blueprint $table) {

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

            $table->timestamps();

        });


        Schema::create('clasifications', function (Blueprint $table) {

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

            $table->integer('concept_id')->unsigned()
                  ->nullable();

            $table->foreign('concept_id')->references('id')->on('concepts')->onDelete('cascade');

            $table->timestamps();

        });


        Schema::create('marcas', function (Blueprint $table) {

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

            $table->timestamps();

        });


        Schema::create('articles', function (Blueprint $table) {

            $table->increments('id');

            $table->string('titulo')
                  ->nullable();

            $table->string('slug')
                  ->nullable();

            $table->string('codigo')
                  ->nullable();

            $table->string('estilo')
                  ->nullable();

            $table->integer('is_rebaja')
                  ->nullable();

            $table->integer('is_trend')
                  ->nullable();

            $table->float('precio_descuento')
                  ->nullable();

            $table->text('description')
                  ->nullable();

            $table->float('precio')
                  ->nullable();


            $table->integer('marca_id')
                  ->unsigned()
                  ->nullable();


            $table->foreign('marca_id')
                  ->references('id')
                  ->on('marcas')
                  ->onDelete('cascade');


            $table->integer('concept_id')
                   ->unsigned()
                   ->nullable();


            $table->foreign('concept_id')
                  ->references('id')
                  ->on('concepts')
                  ->onDelete('cascade');


            $table->integer('clasification_id')
                  ->unsigned()
                  ->nullable();


            $table->foreign('clasification_id')
                  ->references('id')
                  ->on('clasifications')
                  ->onDelete('cascade');


            $table->timestamps();

        });


        Schema::create('aplications', function (Blueprint $table) {

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

            $table->string('svg_path')
                  ->nullable();

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
        Schema::dropIfExists('article_aplication');

        Schema::dropIfExists('aplications');

        Schema::dropIfExists('articles');

        Schema::dropIfExists('marcas');

        Schema::dropIfExists('clasifications');

        Schema::dropIfExists('concepts');

    }
}
