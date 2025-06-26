<?php

namespace Database\Factories;

use App\Models\Slide;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SlideFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'text' => fake()->text(),
            'type' => 'slide',
            'active' => fake()->boolean(),
        ];
    }

    public function configure(): static
    {
        return $this->afterMaking(function (Slide $slide) {
            $slide->addMediaFromUrl('https://picsum.photos/1960/1080')
                ->toMediaCollection('slide');
        });
    }
}
