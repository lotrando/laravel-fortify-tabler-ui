<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\User;
use Database\Seeders\DepartmentSeeder;
use Database\Seeders\JobSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            DepartmentSeeder::class,
            JobSeeder::class
        ]);

        User::factory(10)->create();

        Employee::factory(400)->create();
    }
}
