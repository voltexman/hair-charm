<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'slug' => fake()->slug(),
            'content' => fake()->optional()->paragraphs(5, true),
            'meta_description' => fake()->sentence(),
            'robots' => fake()->sentence(),
            'is_published' => fake()->boolean(20),
            'published_at' => fake()->dateTime(),
        ];
    }
}
