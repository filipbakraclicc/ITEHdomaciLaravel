<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Zgrada;

class ZgradaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Zgrada::factory()->count(60)->create();
    }
}
