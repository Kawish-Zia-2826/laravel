<?php

namespace Database\Seeders;

use App\Models\Father;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FatherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker  = Faker::create();
        
      for ($i=0; $i < 10 ; $i++) { 
        Father::create([
            'Father_name' => $faker->name
        ]);
      }
        
    }
}
