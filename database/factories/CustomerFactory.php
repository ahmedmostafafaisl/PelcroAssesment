<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{


    public function definition()
    {
        return [
            'first_name' => fake()->firstName($gender = 'male'|'female'),
            'last_name' => fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
            'user_name' => fake()->userName(),
            'salary' =>fake()->randomFloat(2) ,
            'status' => fake()->randomDigit(),
        ];
    }
}