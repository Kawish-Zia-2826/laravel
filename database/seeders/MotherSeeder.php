<?php

namespace Database\Seeders;

use App\Models\Mother;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MotherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            $faker = Faker::create();
            static $count = 0;
          for ($i=0; $i < 10; $i++) { 
            Mother::create([
                'Mother_name'=>$faker->name(),
                'Husband'=>$i + 1
        ]);
          }
            
    }
}
