<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

      Schema::create('proyects', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name')
                  ->unique();

            $table->string('slug');

            $table->text('description')
                  ->nullable();

            $table->integer('family_id')
                  ->unsigned()
                  ->nullable();

            $table->foreign('family_id')
                  ->references('id')
                  ->on('families')
                  ->onDelete('cascade');
                  
            $table->string('img_path')
                  ->nullable();

            $table->string('banner_path')
                  ->nullable();
                  
            $table->string('pdf_path')
                  ->nullable();

            $table->string('date')
                  ->nullable();

            $table->timestamps();
      });
    

      Schema::create('aplication_proyect', function (Blueprint $table) {

            $table->increments('id');

            $table->integer('aplication_id')
                  ->unsigned();

            $table->foreign('aplication_id')
                        ->references('id')
                        ->on('aplications')
                        ->onDelete('cascade');
                        
            $table->integer('proyect_id')
                  ->unsigned();

            $table->foreign('proyect_id')
                        ->references('id')
                        ->on('proyects')
                        ->onDelete('cascade');

            $table->string('img_path')
                  ->nullable();

            $table->longText('description')
                  ->nullable();

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
        Schema::dropIfExists('aplication_proyect');
        Schema::dropIfExists('proyects');
    }
}