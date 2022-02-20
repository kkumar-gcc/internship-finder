<?php

namespace Database\Seeders;

use App\Models\Address;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
      $this->call(UserSeeder::class);
      $this->call(InternSeeder::class);
      $this->call(OrganizationSeeder::class);
      $this->call(StaffSeeder::class);
      
    }
}
