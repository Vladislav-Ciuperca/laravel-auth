<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newTechJs = new Technology();

        $newTechJs->name = 'Javasctipt';
        $newTechJs->description = 'Javasctipt is a fantastic Technology';
        $newTechJs->icon = 'fa-brands fa-js';

        $newTechJs->save();
        // // ///////////////////////////
        $newTechLaravel = new Technology();

        $newTechLaravel->name = 'Laravel';
        $newTechLaravel->description = 'Laravel is a fantastic Technology';
        $newTechLaravel->icon = 'fa-brands fa-laravel';

        $newTechLaravel->save();
        // // ///////////////////////////
        $newTechPHP = new Technology();

        $newTechPHP->name = 'PHP';
        $newTechPHP->description = 'PHP is a fantastic Technology';
        $newTechPHP->icon = 'fa-brands fa-php';

        $newTechPHP->save();
        // // ///////////////////////////
        $newTechVue = new Technology();

        $newTechVue->name = 'VueJs';
        $newTechVue->description = 'VueJs is a fantastic Technology';
        $newTechVue->icon = 'fa-brands fa-vuejs';

        $newTechVue->save();
    }
}
