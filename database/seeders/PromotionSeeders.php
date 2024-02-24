<?php

namespace Database\Seeders;

use App\Models\PromotionModel;
use Database\Factories\PromotionFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class PromotionSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromotionModel::factory()->count(10)->create();
    }
}
