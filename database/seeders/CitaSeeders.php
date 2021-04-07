<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\Boolean;

class citaSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('citas')->insert([
            'noFolio' => Str::random(10),
            'nombre' => Str::random(10),
            'descripcion' => Str::random(10),
            'tipoCita' => Str::random(10),
            'id_paciente' => 1,
            'id_medico' => 2,
            'fecha_cita' => '1980/04/06',
            'horaCita' => 1,
            'horaFinCita' => '13:00:00',
            'duracion' => '2',
            'status' => true,
            'costo' => 3000,
            'activo' => true,
        ]);
    }
}