<?php

namespace Database\Factories;

use App\Enums\ProductCategory;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->words(4, true),
            'category' => fake()->randomElement(ProductCategory::all()),
            'type' => fake()->randomElement(['Thick wefts', 'Standard wefts', 'Micro wefts']),
            'active' => fake()->boolean(),
            'options' => collect()->times(5, fn () => [
                'length' => fake()->numberBetween(14, 24),
                'price' => fake()->numberBetween(100, 800),
                'weight' => fake()->numberBetween(80, 200),
            ]),
        ];
    }

    public function configure(): static
    {
        return $this->afterMaking(function (Product $product) {
            $product->addMediaFromUrl('https://picsum.photos/1024/768')
                ->toMediaCollection('product');
        });
    }
}
