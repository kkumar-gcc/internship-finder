<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StaffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'email'=> $this->faker->email(),
            'first_name'=>$this->faker->firstName(),
            'last_name'=>$this->faker->lastName(),
            'company_status'=>$this->faker->boolean()
        ];
    }
}
