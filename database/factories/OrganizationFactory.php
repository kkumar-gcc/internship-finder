<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrganizationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'organization_name'=>$this->faker->name(),
           'organization_phone'=>$this->faker->phoneNumber(),
           'user_id'=>$this->faker->numberBetween(0,100),
           'address_id'=>$this->faker->numberBetween(0,100),
        ];
    }
}
