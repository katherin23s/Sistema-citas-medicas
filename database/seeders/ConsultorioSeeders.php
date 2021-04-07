<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\Boolean;

class consultorioSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('consultorios')->insert([
            'noConsultorio' => 101,
            'status' => 1,
            'activo' => true, //true
        ]);
    }
}