<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker   = Faker::create();

       for ($i=0; $i < 25; $i++) { 
        Student::create(
            [
                'name' => $faker->name(),
                'age'  => $faker->numberBetween(1, 100) // ✅ Correct method
            ]
            
            );
       }
      
    }
}
