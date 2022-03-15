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
            'profile_image' => $this->faker->randomElement($array = array(
                'i1.jpg',
                'i2.jpg', 'i3.jpg', 'i4.jpg', 'i5.jpg', 'i6.jpg', 'i8.jpg',
                'i9.jpg', 'i10.jpg', 'i11.jpg', 'i12.jpg', 'i13.jpg', 'i14.jpg',
                'i15.jpg', 'i16.jpg', 'i17.jpg', 'i18.jpg', 'i19.jpg', 'i20.jpg',
                'i21.jpg', 'i22.jpg', 'i23.jpg', 'i24.jpg', '.25.jpg', 'i26.jpg'
            )),
        ];
    }
}
