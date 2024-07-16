<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $TypeFront = new type();
        $TypeFront -> name = "Front-End";
        $TypeFront -> icon = "fa-solid fa-tv";
        $TypeFront -> save();

        $TypeBack = new type();
        $TypeBack -> name = "Back-End";
        $TypeBack -> icon = "fa-solid fa-gears";
        $TypeBack -> save();

        $TypeFull = new type();
        $TypeFull -> name = "Full-Stack";
        $TypeFull -> icon = "fa-solid fa-layer-group";
        $TypeFull -> save();

    }
}
