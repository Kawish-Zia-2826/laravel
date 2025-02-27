<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        static $studentId = 1; 
        $faker  = Faker::create();
       for ($i=0; $i < 25 ; $i++) { 
        Contact::create(
            [
               'city' => $faker->city(),
               'phone' => $faker->phoneNumber(),
               'student_id' => $studentId++, // ✅ Incrementing student ID
           ]
           );
       }
    }
}
