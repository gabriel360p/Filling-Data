<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>fake()->word(),
            'description'=>fake()->text(),
            'categorie'=>fake()->word(),
            'price'=>fake()->numberBetween(1,1500),
            'release_date'=>fake()->date('y-m-d'),
        ];
    }
}
