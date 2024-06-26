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
            'img' => fake()->url(),
            'name' => fake()->name(),
            'description' => fake()->realText(),
            'price' => fake()->randomFloat(),
            'quantity' => fake()->randomDigit(),
            'category_id' => 1,
        ];
    }
}
