<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PacienteSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pacientes')->insert([
            'nombre' => Str::random(10) . 'cita',
            'apellido' => Str::random(10),
            'apellidoM' => Str::random(10),
            'direccion' => Str::random(10),
            'registro' => '2021/04/06',
            'telefono' => 664982734,
            'edad' => 45,
            'email' => Str::random(10) . '@gmail.com',
            'sexo' => 1,
            'fechaNacimiento' => '1980/04/06',
            'status' => true,
            'activo' => true,

        ]);
    }
}