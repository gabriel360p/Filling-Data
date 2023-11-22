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
            'name'=>fake()->word(),
            'price'=>fake()->numberBetween(1,5000),
            'description'=>fake()->text(),
            'manufacturing_date'=>fake()->date('Y-m-d'),
            'categorie'=>fake()->word(),
            'expiration_date'=>fake()->date('Y-m-d'),
        ];
    }
}
