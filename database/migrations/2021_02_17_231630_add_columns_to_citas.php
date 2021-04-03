<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToCitas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('citas', function (Blueprint $table) {
            $table->foreign('id_paciente')->references('idPaciente')->on('pacientes');
            $table->foreign('id_medico')->references('idMedicos')->on('medicos');
            $table->foreign('id_receta_medica')->references('idRecetaMedica')->on('receta_medica');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('citas', function (Blueprint $table) {
            $table->dropForeign('id_paciente');
            $table->dropForeign('id_medico');
            $table->dropForeign('id_receta_medica');
        });
    }
}