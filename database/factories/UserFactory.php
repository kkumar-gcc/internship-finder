<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_type' => $this->faker->randomElement($array = array('Intern', 'Organization')),
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            // 'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'profile_image' => $this->faker->randomElement($array = array(
                'i1.jpg',
                'i2.jpg', 'i3.jpg', 'i4.jpg', 'i5.jpg', 'i6.jpg', 'i8.jpg',
                'i9.jpg', 'i10.jpg', 'i11.jpg', 'i12.jpg', 'i13.jpg', 'i14.jpg',
                'i15.jpg', 'i16.jpg', 'i17.jpg', 'i18.jpg', 'i19.jpg', 'i20.jpg',
                'i21.jpg', 'i22.jpg', 'i23.jpg', 'i24.jpg', '.25.jpg', 'i26.jpg'
            )),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
