<?php

namespace Database\Seeders;

use App\Models\ProductModel;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Generate
        $faker = Factory::create();

        // Create 50 products
        for ($i = 0; $i < 50; $i++) {
            ProductModel::create([
                'name_product' => $faker->name,
                'slug' => $faker->slug,
            ]);
        }
    }
}
