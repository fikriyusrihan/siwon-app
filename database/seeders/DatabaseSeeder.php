<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Workout;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Workout Category Seeder
        \App\Models\WorkoutCategory::create([
            'title' => 'Easy',
        ]);
        \App\Models\WorkoutCategory::create([
            'title' => 'Medium',
        ]);
        \App\Models\WorkoutCategory::create([
            'title' => 'Hard',
        ]);

        // Program Category Seeder
        \App\Models\ProgramCategory::create([
            'title' => 'Beginner',
        ]);
        \App\Models\ProgramCategory::create([
            'title' => 'Intermediate',
        ]);
        \App\Models\ProgramCategory::create([
            'title' => 'Advanced',
        ]);
    }
}
