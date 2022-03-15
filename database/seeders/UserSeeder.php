<?php

namespace Database\Seeders;

use App\Models\Internship;
use App\Models\Organization;
use App\Models\Proposel;
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
        \App\Models\User::factory(25)->create()
            ->each(function ($user) {
                if ($user->user_type == 'Intern') {
                    $address = \App\Models\Address::factory(1)->create();
                    \App\Models\Intern::factory(1)->create(
                        [
                            'address_id' => $address[0]->id,
                            'user_id' => $user->id
                        ]
                    );
                } else {
                    Organization::factory(1)->create(['user_id' => $user->id])
                        ->each(function ($organization) {
                            Internship::factory()->count(rand(1, 4))->create([
                                'organization_id' => $organization->id
                            ])->each(function ($internship) {
                                Proposel::factory()->count(rand(1, 4))->create([
                                    'internship_id' => $internship->id,
                                    'intern_id' => $internship->id
                                ]);
                            });
                        });
                }
            });
    }
}
