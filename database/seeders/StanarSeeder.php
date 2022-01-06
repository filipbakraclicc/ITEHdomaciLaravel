<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Stanar;

class StanarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Stanar::factory()->count(75)->create();
    }
}
