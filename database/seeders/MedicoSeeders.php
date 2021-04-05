<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use PhpParser\Node\Expr\Cast\Bool_;

class MedicoSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'cedula' => Str::random(10),
            'nombre' => Str::random(10),
            'apellido' => Str::random(10),
            'apellidoM' => Str::random(10),
            'direccion' => Str::random(10),
            'telefono' => Str::random(10),
            // 'edad' => Int::random(10),
            'email' => Str::random(10) . '@gmail.com',
            // 'sexo' => Bool::random(10),
            /* 'fechaNacimiento' => date::random(10),
            'registro' => date::random(10),
            'id_especializacion' => Bool::random(10),
            'id_consultorio' => date::random(10),
            'id_horario' => date::random(10),
            'status' => date::random(10),
            'activo' => date::random(10),*/
            'password' => Hash::make('password'),
        ]);
    }
}