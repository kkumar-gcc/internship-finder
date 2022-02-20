<?php

namespace Database\Seeders;

use App\Models\Internship;
use App\Models\Organization;
use App\Models\Proposel;
use Illuminate\Database\Seeder;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Organization::factory()->count(100)->create()
        ->each(function ($organization){
            Internship::factory()->count(rand(1,4))->create([
                'organization_id'=>$organization->id
            ])
            ->each(function($internship){
                Proposel::factory()->count(rand(1,8))->create([
                    'internship_id'=>$internship->id,
                    'intern_id'=>$internship->id
                ]);
            });
        });
    }
}
