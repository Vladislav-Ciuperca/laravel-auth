<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProjectTechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Recupera tutti gli ID dei progetti e delle tecnologie
        $projectIds = DB::table('projects')->pluck('id')->toArray();
        $technologyIds = DB::table('technology')->pluck('id')->toArray();

        $data = [];

        // Associa casualmente le tecnologie ai progetti
        foreach ($projectIds as $projectId) {
            // Ogni progetto può avere da 1 a 3 tecnologie associate
            $technologyCount = $faker->numberBetween(1, 3);
            $randomTechnologyIds = $faker->randomElements($technologyIds, $technologyCount);

            foreach ($randomTechnologyIds as $technologyId) {
                $data[] = [
                    'project_id' => $projectId,
                    'technology_id' => $technologyId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }

        DB::table('project_technology')->insert($data);
    }
}
