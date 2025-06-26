<?php

namespace Database\Factories;

use App\Models\Carousel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CarouselFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => 'carousel',
            'active' => fake()->boolean(),
        ];
    }

    public function configure(): static
    {
        return $this->afterMaking(function (Carousel $carousel) {
            $carousel->addMediaFromUrl('https://picsum.photos/640/480')
                ->toMediaCollection('carousel');
        });
    }
}
