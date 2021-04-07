<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\Boolean;

class especializacionSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('especializacion')->insert([
            'nombreEspecializacion' => Str::random(10),
            'descripcion' => Str::random(10),
            'activo' => true, //true
        ]);
    }
}