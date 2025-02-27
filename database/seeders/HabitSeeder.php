<?php

namespace Database\Seeders;

use App\Models\Habit;
use Faker\Factory as Faker;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HabitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    //    for ($i=0; $i < 10 ; $i++) { 
        // $faker = Faker::create();
        // Habit::create(
        //     [
        //         'age'=>$faker->numberBetween(18,100),
        //         'city'=>$faker->city(),
        //        'created_at'  => now(),
        //         'updated_at'  => now()
        //     ]
        //     );

        //  $faker = Faker::create();
        Habit::create(
            [
                
                'creation_at' => Carbon::now()->toDateTimeString(), // "2025-02-27 06:30:00"
                'updation_at' => Carbon::now()->toDateTimeString(),
                'age'=>21,
                // 'habit_id' => (string) \Illuminate\Support\Str::uuid(),
            ]
            );
    //    }
    }
}
