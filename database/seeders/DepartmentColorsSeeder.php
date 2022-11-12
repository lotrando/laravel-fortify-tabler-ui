<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentColorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('department_colors')->insert([
            'code' => 'blue',
            'name' => 'Modrá'
        ]);

        DB::table('department_colors')->insert([
            'code' => 'azure',
            'name' => 'Azurová'
        ]);

        DB::table('department_colors')->insert([
            'code' => 'indigo',
            'name' => 'Indigo'
        ]);

        DB::table('department_colors')->insert([
            'code' => 'purple',
            'name' => 'Fialová'
        ]);

        DB::table('department_colors')->insert([
            'code' => 'pink',
            'name' => 'Růžová'
        ]);

        DB::table('department_colors')->insert([
            'code' => 'red',
            'name' => 'Červená'
        ]);

        DB::table('department_colors')->insert([
            'code' => 'orange',
            'name' => 'Oranžová'
        ]);

        DB::table('department_colors')->insert([
            'code' => 'yellow',
            'name' => 'Žlutá'
        ]);

        DB::table('department_colors')->insert([
            'code' => 'lime',
            'name' => 'Limetová'
        ]);

        DB::table('department_colors')->insert([
            'code' => 'green',
            'name' => 'Zelená'
        ]);

        DB::table('department_colors')->insert([
            'code' => 'teal',
            'name' => 'Modrozelená'
        ]);

        DB::table('department_colors')->insert([
            'code' => 'cyan',
            'name' => 'Tyrkysová'
        ]);
    }
}
