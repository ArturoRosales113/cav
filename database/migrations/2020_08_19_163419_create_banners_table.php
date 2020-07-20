<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {

            $table->increments('id');

            $table->string('titulo')
                  ->nullable();

            $table->string('url')
                  ->nullable();

            $table->string('img_path');

            $table->text('descripcion')
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
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banners');
    }
}
