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
            'last_name' => $this->faker->name(),
            'other_name' => $this->faker->name(),
            'gender' => $this->faker->randomElement($array = array('male', 'female')),
            'phone' => $this->faker->phoneNumber(11),
            'date_of_birth' => $this->faker->date('Y_m_d'),
            'area_of_interest' => $this->faker->randomElement($array = array(
                'React', 'Photoshop', 'Laravel',
                'Corel Draw', 'Flutter', 'React Native', 'Java', 'Javascript', 'Python', 'Marven', 'Adobe After Affect',
                'Illustrator', 'Video Editing', 'Cyber Security', 'Data Science', 'Node.js', 'Next.js'
            )),
        ];
    }
}
