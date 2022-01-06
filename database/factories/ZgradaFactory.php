<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Grad;

class ZgradaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ulica' => $this->faker->streetAddress(),
            'brojStanova' => $this->faker->numberBetween($min = 12, $max = 256),
            'brojSpratova' => $this->faker->numberBetween($min = 3, $max = 43),
            'predsednik' => $this->faker->name(),
            'email' => $this->faker->freeEmail(),
            'grad_id' => Grad::factory()
        ];
    }
}
