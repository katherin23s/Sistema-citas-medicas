<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicos', function (Blueprint $table) {
            $table->integerIncrements('idMedicos');
            $table->string('cedula');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('apellidoM');
            $table->string('direccion');
            $table->bigInteger('telefono');
            $table->integer('edad');
            $table->string('email');
            $table->boolean('sexo');
            $table->date('fechaNacimiento');
            $table->date('registro');
            $table->unsignedInteger('id_especializacion');
            $table->unsignedInteger('id_consultorio');
            $table->unsignedInteger('id_horario');
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
        Schema::dropIfExists('medicos');
    }
}