<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Project;
use App\Models\Technology;

use Faker\Generator as Faker;

class ProjectTechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $projects = Project::all();

        foreach ($projects as $project) {
            $project->Technology()->attach([
                $faker->numberBetween(1, 4),
                $faker->numberBetween(1, 4)
            ]);
        }
    }
}
