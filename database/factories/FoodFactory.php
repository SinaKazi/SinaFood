<?php

namespace Database\Factories;

use App\Models\Restaurants;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Food>
 */
class FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>fake()->colorName,
            'restaurants_id'=>Restaurants::factory(),
            'price'=>rand(1000,500000),
            'data'=>fake()->text,
            'imag_url'=>fake()->url,
            'inventory'=>rand(0,20)

        ];
    }
}
