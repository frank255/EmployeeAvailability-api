<?php

namespace Database\Seeders;

use App\Http\Controllers\EmployeeAvailabilityController;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeAvailabilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // $faker = \Faker\Factory::create();

EmployeeAvailability::factory()->times(20)->create();

    }
}
