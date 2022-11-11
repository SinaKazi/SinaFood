<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\Address_Restaurant;
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
            'account_number'=>fake()->randomDigitNotNull,
            'type_restaurant'=>rand(0,4),
            'url_img'=>fake()->imageUrl,
            'work_time'=>fake()->time,
            'status'=>rand(0,1),
            'address_id'=>Address::factory()
        ];
    }
}
