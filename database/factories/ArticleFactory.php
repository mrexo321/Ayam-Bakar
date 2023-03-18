<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'title' => fake()->title(),
            'subtitle' => fake()->sentence(),
            'image' => 'http://localhost:8000/assets/Logo.png',
            'slug' => Str::of(fake()->name())->slug('-'),
            'category_id' => rand(1, 3),
            'user_id' => rand(1, 2)
        ];
    }
}
