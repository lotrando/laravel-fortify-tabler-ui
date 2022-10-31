<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            'department_code' => '401',
            'center_code' => '4501',
            'department_name' => 'Interní oddělení',
        ]);

        DB::table('departments')->insert([
            'department_code' => '402',
            'center_code' => '4502',
            'department_name' => 'Endokrinologická ambulance',
        ]);

        DB::table('departments')->insert([
            'department_code' => '403',
            'center_code' => '4503',
            'department_name' => 'Příjmová interní ambulance',
        ]);

        DB::table('departments')->insert([
            'department_code' => '404',
            'center_code' => '4507',
            'department_name' => 'Gastroenterologická ambulance',
        ]);

        DB::table('departments')->insert([
            'department_code' => '405',
            'center_code' => '4507',
            'department_name' => 'Interní odborné ambulance',
        ]);

        DB::table('departments')->insert([
            'department_code' => '407',
            'center_code' => '4512',
            'department_name' => 'Neurologické oddělení',
        ]);

        DB::table('departments')->insert([
            'department_code' => '408',
            'center_code' => '4513',
            'department_name' => 'Neurologická ambulance',
        ]);

        DB::table('departments')->insert([
            'department_code' => '410',
            'center_code' => '4501',
            'department_name' => 'Odělení chirurgie páteře',
        ]);

        DB::table('departments')->insert([
            'department_code' => '411',
            'center_code' => '4521',
            'department_name' => 'JIP oddělení chirurgie páteře a ortopedie',
        ]);

        DB::table('departments')->insert([
            'department_code' => '412',
            'center_code' => '4524',
            'department_name' => 'Ambulance chirurgie páteře',
        ]);

        DB::table('departments')->insert([
            'department_code' => '413',
            'center_code' => '4551',
            'department_name' => 'Rehabilitační oddělení',
        ]);

        DB::table('departments')->insert([
            'department_code' => '414',
            'center_code' => '4552',
            'department_name' => 'Rehabilitační ambulance',
        ]);

        DB::table('departments')->insert([
            'department_code' => '415',
            'center_code' => '4558',
            'department_name' => 'Oddělení pracovního lékařství',
        ]);

        DB::table('departments')->insert([
            'department_code' => '417',
            'center_code' => '4547',
            'department_name' => 'OKB',
        ]);

        DB::table('departments')->insert([
            'department_code' => '418',
            'center_code' => '4549',
            'department_name' => 'RDG',
        ]);

        DB::table('departments')->insert([
            'department_code' => '419',
            'center_code' => '4522',
            'department_name' => 'Operační sály',
        ]);

        DB::table('departments')->insert([
            'department_code' => '420',
            'center_code' => '4110',
            'department_name' => 'Ředitelství',
        ]);

        DB::table('departments')->insert([
            'department_code' => '421',
            'center_code' => '4120',
            'department_name' => 'Stravovací provoz - kantýna',
        ]);

        DB::table('departments')->insert([
            'department_code' => '422',
            'center_code' => '4130',
            'department_name' => 'Úklid',
        ]);

        DB::table('departments')->insert([
            'department_code' => '424',
            'center_code' => '4528',
            'department_name' => 'Anesteziologická ambulance',
        ]);

        DB::table('departments')->insert([
            'department_code' => '425',
            'center_code' => '4504',
            'department_name' => 'Diabetologická ambulance',
        ]);

        DB::table('departments')->insert([
            'department_code' => '426',
            'center_code' => '4141',
            'department_name' => 'Lékárna KHN',
        ]);

        DB::table('departments')->insert([
            'department_code' => '427',
            'center_code' => '4510',
            'department_name' => 'Mezioborová JIP',
        ]);

        DB::table('departments')->insert([
            'department_code' => '428',
            'center_code' => '4524',
            'department_name' => 'Provozní úsek',
        ]);

        DB::table('departments')->insert([
            'department_code' => '429',
            'center_code' => '4150',
            'department_name' => 'Údržba',
        ]);

        DB::table('departments')->insert([
            'department_code' => '432',
            'center_code' => '4507',
            'department_name' => 'Ambulance infuzní terapie',
        ]);

        DB::table('departments')->insert([
            'department_code' => '433',
            'center_code' => '4524',
            'department_name' => 'Mamologická poradna',
        ]);

        DB::table('departments')->insert([
            'department_code' => '434',
            'center_code' => '4525',
            'department_name' => 'Ortopedické oddělení',
        ]);

        DB::table('departments')->insert([
            'department_code' => '436',
            'center_code' => '4143',
            'department_name' => 'Lékárna KHN v Ráji',
        ]);

        DB::table('departments')->insert([
            'department_code' => '437',
            'center_code' => '4560',
            'department_name' => 'Oddělení následné péče',
        ]);

        DB::table('departments')->insert([
            'department_code' => '999',
            'center_code' => '9999',
            'department_name' => 'Externí pracovník',
        ]);
    }
}
