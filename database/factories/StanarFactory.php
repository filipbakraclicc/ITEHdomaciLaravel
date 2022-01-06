<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Zgrada;

class StanarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime' => $this->faker->firstName(),
            'prezime' => $this->faker->lastName(),
            'jmbg' => $this->faker->numerify('##########'),
            'brojStana' => $this->faker->numberBetween($min = 1, $max = 256),
            'zgrada_id' => Zgrada::factory()
        ];
    }
}
