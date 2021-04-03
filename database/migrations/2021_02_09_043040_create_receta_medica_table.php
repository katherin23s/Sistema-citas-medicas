<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecetaMedicaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receta_medica', function (Blueprint $table) {
            $table->integerIncrements('idRecetaMedica');
            $table->unsignedInteger('id_folio');
            $table->unsignedInteger('id_paciente');
            $table->unsignedInteger('id_medico');
            $table->string('descripcion');
            $table->string('medicamentos');
            $table->integer('cantidad');
            $table->date('fecha');
            $table->string('status');
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
        Schema::dropIfExists('receta_medica');
    }
}