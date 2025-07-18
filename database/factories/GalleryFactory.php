<?php

namespace Database\Factories;

use App\Models\Gallery;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gallery>
 */
class GalleryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => 'gallery',
            'active' => fake()->boolean(),
        ];
    }

    public function configure(): static
    {
        return $this->afterMaking(function (Gallery $gallery) {
            $gallery->addMediaFromUrl('https://picsum.photos/800/600')
                ->toMediaCollection('gallery');
        });
    }
}
