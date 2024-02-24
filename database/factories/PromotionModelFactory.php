<?php

namespace Database\Factories;

use App\Models\PromotionModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PromotionModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = PromotionModel::class;
    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            'discount' => fake()->numberBetween(0, 100),
            'status' => fake()->boolean(),
            'from' => fake()->dateTime(),
            'to' => fake()->dateTime(),
        ];
    }
}
