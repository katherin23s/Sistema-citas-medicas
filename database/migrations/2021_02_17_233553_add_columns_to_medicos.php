<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToMedicos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('medicos', function (Blueprint $table) {
            $table->foreign('id_especializacion')->references('idEspecializacion')->on('especializacion');
            $table->foreign('id_horario')->references('idHorario')->on('Horario');
            $table->foreign('id_consultorio')->references('idConsultorio')->on('consultorios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('medicos', function (Blueprint $table) {
            $table->dropForeign('id_especializacion');
            $table->dropForeign('id_horario');
            $table->dropForeign('id_consultorio');
        });
    }
}