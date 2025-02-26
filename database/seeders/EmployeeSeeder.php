<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      

        for ($i=0; $i < 10; $i++) { 
            $faker = Faker::create(); 
        
        
           
    
            Employee::create(['name'=> $faker->name(),
            'city'=> $faker->city(),
            'status'=> $faker->randomElement(['active', 'inactive'])]);
        }
    }
}
