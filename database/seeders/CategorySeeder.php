<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'category_name' => 'Akreditační',
            'category_icon' => 'akreditacni.png'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Ošetřovatelské',
            'category_icon' => 'osetrovatelske.png'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Léčebné',
            'category_icon' => 'lecebne.png'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Speciální',
            'category_icon' => 'specialni.png'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Operační',
            'category_icon' => 'operacni'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Anesteziologické',
            'category_icon' => 'anesteziologicke.png'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'RDG',
            'category_icon' => '<svg class="icon icon-tabler icon-tabler-radioactive" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                       stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M13.5 14.6l3 5.19a9 9 0 0 0 4.5 -7.79h-6a3 3 0 0 1 -1.5 2.6"></path>
                    <path d="M13.5 9.4l3 -5.19a9 9 0 0 0 -9 0l3 5.19a3 3 0 0 1 3 0"></path>
                    <path d="M10.5 14.6l-3 5.19a9 9 0 0 1 -4.5 -7.79h6a3 3 0 0 0 1.5 2.6"></path>
                  </svg>'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Rehabilitační',
            'category_icon' => 'rehabilitacni'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'OPL',
            'category_icon' => 'opl.png'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'OKB',
            'category_icon' => 'okb.png'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Logopedické',
            'category_icon' => 'logopedicke.png'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Legislativní',
            'category_icon' => 'legislativni'
        ]);
    }
}
