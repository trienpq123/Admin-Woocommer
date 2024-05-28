<?php

namespace Database\Seeders;

use App\Models\RateModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RateSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RateModel::factory(20)->create();
    }
}
