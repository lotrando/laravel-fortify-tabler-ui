<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrinterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('printers')->insert([
            'vendor' => 'HP',
            'printer_type' => 'LaserJet',
            'printer_name' => '1018',
            'toner_id' => 'Q2612A',
        ]);

        DB::table('printers')->insert([
            'vendor' => 'HP',
            'printer_type' => 'LaserJet',
            'printer_name' => '1020',
            'toner_id' => 'Q2612A',
        ]);

        DB::table('printers')->insert([
            'vendor' => 'HP',
            'printer_type' => 'LaserJet',
            'printer_name' => '1022',
            'toner_id' => 'Q2612A',
        ]);
    }
}
