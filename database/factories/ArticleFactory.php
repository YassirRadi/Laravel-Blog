<?php

namespace Database\Factories;

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
            'title' => fake()->realText(30),
            'content' => "<p>" . fake()->paragraph(rand(3, 20), true) . "</p>",
            'image_url' => fake()->imageUrl(304, 218),
            'status' => "draft",
            'user_id' => User::factory(),
        ];
    }
}
