<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            'date' => fake()->date(),
            'image' => fake()->image(),
            'content' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using'
        ];
    }
}
