<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RateModel>
 */
class RateModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_product' => $this->faker->numberBetween(1, 10),
            'user' =>  $this->faker->numberBetween(1, 100),
            'status' => $this->faker->numberBetween(0, 1),
            'rate' => $this->faker->numberBetween(0, 5),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
