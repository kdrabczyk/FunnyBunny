<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bunny>
 */
class BunnyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'name' => fake()->name(),
                'color' => fake()->colorName(),
                'age' => fake()->numberBetween(1, 10),
                'image' => fake()->imageUrl(),
        ];
    }

    protected $model = \App\Models\Bunny::class;
}
