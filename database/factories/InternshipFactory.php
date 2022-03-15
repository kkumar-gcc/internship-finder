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
            'title'=>$this->faker->title(30),
            'description'=>$this->faker->realText(100),
            'email'=>$this->faker->safeEmail(),
           'phoneNumber'=>$this->faker->phoneNumber(),
            'category'=>$this->faker->text(20),
            'internship_type'=>$this->faker->mimeType(),
            'designation'=>$this->faker->country(),
           'salary'=>$this->faker->numberBetween(100,1000),
            'qualification'=>$this->faker->realTextBetween(40,50),
           'skills'=>$this->faker->text(8),
            'lastdate'=>$this->faker->date(),
            'location'=>$this->faker->streetAddress(),
           'city'=>$this->faker->city(),
            'zipcode'=>$this->faker->numberBetween(1000,10000),
           
        ];
    }
}
