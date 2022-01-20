<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class InternFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->realText(30),
            'last_name' => $this->faker->realText(30),
            'other_name' => $this->faker->realText(30),
            'gender' => $this->faker->randomElement($array = array ('male', 'female')) ,
            'phone' => $this->faker->phoneNumber(11),
            'date_of_birth' => $this->faker->date('Y_m_d'),
            'area_of_interest' => $this->faker->realText(200),
        ];
    }
}
