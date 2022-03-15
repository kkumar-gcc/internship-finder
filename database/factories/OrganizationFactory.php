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
           'name'=>$this->faker->name(),
        //    'phone'=>$this->faker->phoneNumber(),
        //    'user_id'=>$this->faker->numberBetween(0,100),
        //    'address_id'=>$this->faker->numberBetween(0,100),
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
