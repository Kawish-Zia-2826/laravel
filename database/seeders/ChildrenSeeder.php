<?php

namespace Database\Seeders;

use App\Models\Children;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ChildrenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        static $motherCounter = 1; // Static variable to keep track

        for ($i = 0; $i < 10; $i++) {
            Children::create([
                'children_name' => $faker->name(),
                'mother_name'   => (string) $motherCounter // Using static counter
            ]);

            $motherCounter++; // Increment static counter
        }
    }
}
