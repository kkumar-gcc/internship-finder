<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class InternshipFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->realText(30),
        ];
    }
}
