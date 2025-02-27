<?php

namespace Database\Seeders;
use Faker\Factory as Faker;;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker   = Faker::create();
        // 'student_id'=>$faker->numberBetween(1,25)
    }
}
