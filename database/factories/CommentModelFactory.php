<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CommentModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_product' => $this->faker->numberBetween(1,10),
            'id_user' => $this->faker->numberBetween(1,10),
            'text' => $this->faker->text(200),
            'status'=> $this->faker->numberBetween(0,1),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
