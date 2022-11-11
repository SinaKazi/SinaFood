<?php

namespace Database\Factories;

use App\Models\Category;
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
            'title'=>fake()->colorName,
            'restaurants_id'=>Restaurants::factory(),
            'category_id'=>Category::factory(),
            'price'=>rand(1000,500000),
            'raw_material'=>fake()->text,
            'image'=>fake()->imageUrl,
            'inventory'=>rand(0,20)
        ];
    }
}
