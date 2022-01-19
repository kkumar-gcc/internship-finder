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
            'first_name' => $this->faker->name(),
            // 'email' => $this->faker->unique()->safeEmail(),
            'other_name' => $this->faker->lastName(),
            'last_name' => $this->faker->lastName(),
            'gender'=> $this->faker->boolean(),
            'phone'=>$this->faker->phoneNumber(),
            'date_of_birth'=>$this->faker->date(),
            'area_of_interest'=>$this->faker->sentence()

        ];
    }
}
