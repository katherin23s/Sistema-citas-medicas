<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->integerIncrements('idPersona');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('apellidoM');
            $table->string('direccion');
            $table->date('registro');
            $table->bigInteger('telefono');
            $table->integer('edad');
            $table->string('email');
            $table->boolean('sexo');
            $table->date('fechaNacimiento');
            $table->boolean('status');
            $table->boolean('activo');
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
        Schema::dropIfExists('persona');
    }
}