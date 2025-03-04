<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Accessor>
 */
class AccessorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_name'=>fake()->name(),
            'email'=>fake()->unique()->safeEmail(),
            'password'=>Str::random(10),
            'dob'=>fake()->date(),
            'salary'=>fake()->randomNumber(4,true)
        ];
    }
}
