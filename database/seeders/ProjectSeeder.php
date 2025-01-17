<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for ($i = 0; $i < 100; $i++) {
            $newProject = new Project();
            $newProject->titolo = $faker->sentence(2);
            $newProject->descrizione = $faker->sentence(22);
            $newProject->immagine = "https://picsum.photos/id/" . rand(1, 200) . "/400/300";
            $newProject->type_id = $faker->numberBetween(1, 3);

            // $newProject->technologies()->attach(
            //     [1,3]
                // [$faker->numberBetween(1, 4),$faker->numberBetween(1, 4)]
            // );

            $newProject->save();
        }
    }
}
