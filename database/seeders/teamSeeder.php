<?php

namespace Database\Seeders;

use App\Models\teamsModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class teamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teams = [
            'Quản lý nhân sự',
            'Quản lý Content',
            'SEO'
        ];
        foreach ($teams as $team) {
            teamsModel::create([
                'name' => $team
            ]);
        }
    }
}
