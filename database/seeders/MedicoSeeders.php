<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MedicoSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicos')->insert([
            'cedula' => Str::random(10),
            'nombre' => Str::random(10),
            'apellido' => Str::random(10),
            'apellidoM' => Str::random(10),
            'direccion' => Str::random(10),
            'telefono' => 664982734,
            'edad' => 45,
            'email' => Str::random(10) . '@gmail.com',
            'sexo' => 1,
            'fechaNacimiento' => '1980/04/06',
            'registro' => '2021/04/06',
            'id_especializacion' => 1,
            'id_consultorio' => 1,
            'id_horario' => 1,
            'status' => true,
            'activo' => true,

        ]);



        /*  $table->integerIncrements('idMedicos');
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
        $table->unsignedInteger('id_horario');*/
    }
}