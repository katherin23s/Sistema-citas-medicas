<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->integerIncrements('idCita');
            $table->string('noFolio');
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('tipoCita');
            $table->unsignedInteger('id_paciente');
            $table->unsignedInteger('id_medico');
            // $table->unsignedInteger('id_receta_medica');
            $table->date('fecha_cita');
            $table->time('horaCita');
            $table->time('horaFinCita');
            $table->integer('duracion');
            $table->boolean('status');
            $table->double('costo');
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
        Schema::dropIfExists('citas');
    }
}