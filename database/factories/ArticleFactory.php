<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'title' => fake()->realText(20),
            'content' => fake()->paragraph(rand(3, 50), true),
            'image_url' => fake()->imageUrl(304, 218),
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
        ];
    }
}
