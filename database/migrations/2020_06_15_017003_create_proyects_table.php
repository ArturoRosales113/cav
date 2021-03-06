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

            $table->integer('aplication_id')
                  ->unsigned()
                  ->nullable();

            $table->foreign('aplication_id')
                  ->references('id')
                  ->on('aplications')
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
    
   }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyects');
    }
}