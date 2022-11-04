<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Restaurants>
 */
class RestaurantsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id'=> User::factory(),
            'name' => fake()->name(),
            'phone_number' => fake()->unique()->phoneNumber,
            'address' => fake()->address,
            'lat' => fake()->randomDigit(8),
            'lng' => fake()->randomDigit(8),
            'account_number'=>fake()->randomDigitNotNull,
            'type_rest'=>rand(0,4),
            'url_img'=>fake()->url,
            'time'=>fake()->time,
            'status'=>rand(0,1)
        ];
    }
}
