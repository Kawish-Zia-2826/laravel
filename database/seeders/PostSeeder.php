<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create(); // ✅ Faker instance create kiya

        $posts = collect([
            [
                'title'       => $faker->sentence(4), // ✅ Random title
                'slug'        => $faker->slug,
                'description' => $faker->paragraph,
                'user_id'     => rand(1, 6), // ✅ Random user_id (1-3)
                'created_at'  => now(),
                'updated_at'  => now()
            ],
            [
                'title'       => $faker->sentence(4),
                'slug'        => $faker->slug,
                'description' => $faker->paragraph,
                'user_id'     => rand(3, 12),
                'created_at'  => now(),
                'updated_at'  => now()
            ],
            [
                'title'       => $faker->sentence(4),
                'slug'        => $faker->slug,
                'description' => $faker->paragraph,
                'user_id'     => rand(1, 12),
                'created_at'  => now(),
                'updated_at'  => now()
            ],
        ]);

        $posts->each(function ($post) {
            Post::create($post); // ✅ insert() ki jagah create() use kiya
        });
    }
}
