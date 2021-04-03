<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToRecetaMedica extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('receta_medica', function (Blueprint $table) {

            $table->foreign('id_paciente')->references('idPaciente')->on('pacientes');
            $table->foreign('id_medico')->references('idMedicos')->on('medicos');
            //  $table->foreign('id_cita')->references('idCita')->on('citas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('receta_medica', function (Blueprint $table) {
            $table->dropForeign('id_paciente');
            $table->dropForeign('id_medico');
            // $table->dropForeign('id_cita');
            // $table->dropColumn('id_paciente');
            //$table->integer('id_paciente');
        });
    }
}