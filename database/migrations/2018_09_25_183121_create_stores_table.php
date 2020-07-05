<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zones', function (Blueprint $table) {

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

        Schema::create('stores', function (Blueprint $table) {

            $table->increments('id');

            $table->string('display_name');

            $table->string('name')
                  ->unique();

            $table->string('calle')
                  ->nullable();


            $table->string('colonia')
                  ->nullable();


            $table->string('estado')
                  ->nullable();


            $table->string('codigo_postal')
                  ->nullable();


            $table->string('telefono')
                  ->nullable();


            $table->string('lat')
                  ->nullable();


            $table->string('lng')
                  ->nullable();

            $table->longText('iframe')
                  ->nullable();


            $table->integer('zone_id')
            ->unsigned()
            ->nullable();


            $table->foreign('zone_id')
            ->references('id')
            ->on('zones')
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
        Schema::dropIfExists('stores');
        Schema::dropIfExists('zones');
    }
}
