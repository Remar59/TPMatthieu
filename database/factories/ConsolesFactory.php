<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ConsolesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'slug' => fake(),
            'title' => fake()->sentence(3),
            'brand' => fake()->text(),
            'cover' => fake()->imageUrl(),
            'released_at' => fake()->dateTimeBetween('-50 years', '+10 years'),
        ];
    }
}
