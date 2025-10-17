<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
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
            //
            'name' => fake()->words(2, true),
            'description' => fake()->sentence(10),
            'image' => 'https://images.tokopedia.net/img/cache/1600-square/aphluv/1997/1/1/0b893ab607884d469e0aa47ac7cd9cc7~.jpeg',
            'stock' => fake()->numberBetween(10, 200),
            'price'=> fake()->numberBetween(10000,10000000),
        ];
    }
}
