<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cycle>
 */
class CycleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition(): array
    {
        return [
            'name' => 'Cycle',
            'price' => rand(120, 650).'$',
            'desc' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters',
            'image' => fake()->randomElement($pngArr = ['img-1.png', 'img-2.png', 'img-3.png', 'img-4.png','img-5.png']),
            'category_id' => fake()->randomElement($array = array ('1','2','3')),
            'in_stock' => fake()->randomElement($array = array ('0','1'))
        ];
    }
}
