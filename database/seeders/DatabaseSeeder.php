<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\GradSeeder;
use Database\Seeders\StanarSeeder;
use Database\Seeders\ZgradaSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $gseeder = new GradSeeder();
        $gseeder->run();

        $sseeder = new StanarSeeder();
        $sseeder->run();

        $zseeder = new ZgradaSeeder();
        $zseeder->run();
    }
}
