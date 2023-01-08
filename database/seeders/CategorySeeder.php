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
            'category_icon' => '<svg class="icon icon-tabler icon-tabler-file-certificate" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                    <path d="M5 8v-3a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2h-5"></path>
                    <circle cx="6" cy="14" r="3"></circle>
                    <path d="M4.5 17l-1.5 5l3 -1.5l3 1.5l-1.5 -5"></path>
                  </svg>'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Ošetřovatelské',
            'category_icon' => '<svg class="icon icon-tabler icon-tabler-stethoscope" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M6 4h-1a2 2 0 0 0 -2 2v3.5h0a5.5 5.5 0 0 0 11 0v-3.5a2 2 0 0 0 -2 -2h-1"></path>
                    <path d="M8 15a6 6 0 1 0 12 0v-3"></path>
                    <path d="M11 3v2"></path>
                    <path d="M6 3v2"></path>
                    <circle cx="20" cy="10" r="2"></circle>
                  </svg>'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Léčebné',
            'category_icon' => '<svg class="icon icon-tabler icon-tabler-hearts" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M14.017 18.001l-2.017 1.999l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 0 1 8.153 5.784"></path><path d="M15.99 20l4.197 -4.223a2.81 2.81 0 0 0 .006 -3.948a2.747 2.747 0 0 0 -3.91 -.007l-.28 .282l-.279 -.283a2.747 2.747 0 0 0 -3.91 -.007a2.81 2.81 0 0 0 -.007 3.948l4.182 4.238z"></path></svg>'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Speciální',
            'category_icon' => '<svg class="icon icon-tabler icon-tabler-report-medical" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2"></path>
                    <rect x="9" y="3" width="6" height="4" rx="2"></rect>
                    <line x1="10" y1="14" x2="14" y2="14"></line>
                    <line x1="12" y1="12" x2="12" y2="16"></line>
                  </svg>'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Operační',
            'category_icon' => '<svg class="icon icon-tabler icon-tabler-slice" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="1"
                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M3 19l15 -15l3 3l-6 6l2 2a14 14 0 0 1 -14 4"></path>
                  </svg>'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Anesteziologické',
            'category_icon' => '<svg class="icon icon-tabler icon-tabler-heart-rate-monitor" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                       stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <rect x="3" y="4" width="18" height="12" rx="1"></rect>
                    <path d="M7 20h10"></path>
                    <path d="M9 16v4"></path>
                    <path d="M15 16v4"></path>
                    <path d="M7 10h2l2 3l2 -6l1 3h3"></path>
                  </svg>'
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
            'category_icon' => '<svg class="icon icon-tabler icon-tabler-physotherapist" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                       stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M9 15l-1 -3l4 -2l4 1h3.5"></path>
                    <circle cx="4" cy="19" r="1"></circle>
                    <circle cx="12" cy="6" r="1"></circle>
                    <path d="M12 17v-7"></path>
                    <path d="M8 20h7l1 -4l4 -2"></path>
                    <path d="M18 20h3"></path>
                  </svg>'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'OPL',
            'category_icon' => '<svg class="icon icon-tabler icon-tabler-bandage" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="1"
                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <line x1="14" y1="12" x2="14" y2="12.01"></line>
                    <line x1="10" y1="12" x2="10" y2="12.01"></line>
                    <line x1="12" y1="10" x2="12" y2="10.01"></line>
                    <line x1="12" y1="14" x2="12" y2="14.01"></line>
                    <path d="M4.5 12.5l8 -8a4.94 4.94 0 0 1 7 7l-8 8a4.94 4.94 0 0 1 -7 -7"></path>
                  </svg>'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'OKB',
            'category_icon' => '<svg class="icon icon-tabler icon-tabler-flask" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="1"'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Logopedické',
            'category_icon' => '<svg class="icon icon-tabler icon-tabler-messages" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="2"
                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M21 14l-3 -3h-7a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1h9a1 1 0 0 1 1 1v10"></path>
                    <path d="M14 15v2a1 1 0 0 1 -1 1h-7l-3 3v-10a1 1 0 0 1 1 -1h2"></path>
                  </svg>'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Legislativní',
            'category_icon' => '<svg class="icon icon-tabler icon-tabler-certificate" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                       stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <circle cx="15" cy="15" r="3"></circle>
                    <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                    <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73"></path>
                    <line x1="6" y1="9" x2="18" y2="9"></line>
                    <line x1="6" y1="12" x2="9" y2="12"></line>
                    <line x1="6" y1="15" x2="8" y2="15"></line>
                  </svg>'
        ]);
    }
}
