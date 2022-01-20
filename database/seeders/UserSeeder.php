<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(100)->create()
            ->each(function ($user) {
                
               $address = \App\Models\Address::factory(1)->create();
                \App\Models\Intern::factory(1)->create([
                    'address_id' => $address[0]->id,
                    'user_id' => $user->id
                ]
                );
            });
    }
}
