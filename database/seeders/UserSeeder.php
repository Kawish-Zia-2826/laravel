<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $users = collect([
            [
                'name'=>$faker->name,
                'email'=>$faker->safeEmail()
            ],
            [
                'name'=>$faker->name,
                'email'=>$faker->safeEmail()
            ],
            [
                'name'=>$faker->name,
                'email'=>$faker->safeEmail()
            ],
            [
                'name'=>$faker->name,
                'email'=>$faker->safeEmail()
            ],
            [
                'name'=>$faker->name,
                'email'=>$faker->safeEmail()
            ],
            [
                'name'=>$faker->name,
                'email'=>$faker->safeEmail()
            ],
            ]);

            $users->each(function($u){
                User::create($u);
            });
    }
}
