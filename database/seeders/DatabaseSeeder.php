<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        /*DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10) . '@gmail.com',
            'password' => Hash::make('password'),
        ]);*/

        $this->call([
            especializacionSeeders::class,
        ]);

        $this->call([
            ConsultorioSeeders::class,
        ]);

        $this->call([
            MedicoSeeders::class,
        ]);

        $this->call([
            PacienteSeeders::class,
        ]);

        $this->call([
            CitaSeeders::class,
        ]);
    }
}