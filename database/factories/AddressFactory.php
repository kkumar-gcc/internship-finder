<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'house_number' => $this->faker->numberBetween(0, 200),
            'city' => $this->faker->city(),
            'state' => $this->faker->realText(30),
            'country' => $this->faker->country(),
        ];
    }
}
