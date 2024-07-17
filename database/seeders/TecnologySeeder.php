<?php

namespace Database\Seeders;

use App\Models\tecnology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TecnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tecJs = new tecnology();
        $tecJs -> name = "Javascript" ;
        $tecJs -> description = "Javascript is a great tecnology" ;
        $tecJs -> icon = "fa-brands fa-js" ;
        $tecJs ->save();

        $tecVue = new tecnology();
        $tecVue -> name = "Vue" ;
        $tecVue -> description = "Vue is a great tecnology" ;
        $tecVue -> icon = "fa-brands fa-vuejs" ;
        $tecVue ->save();

        $tecPHP = new tecnology();
        $tecPHP -> name = "PHP" ;
        $tecPHP -> description = "PHP is a great tecnology" ;
        $tecPHP -> icon = "fa-brands fa-php" ;
        $tecPHP ->save();

        $tecLaravel = new tecnology();
        $tecLaravel -> name = "Laravel" ;
        $tecLaravel -> description = "Laravel is a great tecnology" ;
        $tecLaravel -> icon = "fa-brands fa-laravel" ;
        $tecLaravel ->save();

    }
}
