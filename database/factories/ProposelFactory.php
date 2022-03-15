<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProposelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'reason'=>$this->faker->realText(60),
            'available_time'=>$this->faker->realText(30),
            'status'=>$this->faker->randomElement(['Applied', 'Apply', 'Active']),
        ];
    }
}
