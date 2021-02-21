<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistributorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distributors', function (Blueprint $table) {

            $table->increments('id');

            $table->string('nombre')
                  ->nullable();

            $table->string('razonSocial')
                  ->nullable();

            $table->string('paginaWeb')
                  ->nullable();

            $table->string('correo')
                  ->nullable();

            $table->string('telefonoFijo')
                  ->nullable();

            $table->string('telefonoCelular')
                  ->nullable();

            $table->string('pais')
                  ->nullable();

            $table->string('estado')
                  ->nullable();

            $table->string('ciudad')
                  ->nullable();

            $table->string('calle')
                  ->nullable();

            $table->string('numeroExterior')
                  ->nullable();

            $table->string('codigoPostal')
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
        Schema::dropIfExists('distributors');
    }
}
