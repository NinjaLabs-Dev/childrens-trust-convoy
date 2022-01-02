<?php

namespace Database\Seeders;

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
        $this->call(UserSeeder::class);
        $this->call(RouteSeeder::class);
        $this->call(SlotSeeder::class);
        $this->call(VTCSeeder::class);
        $this->call(VTCContactSeeder::class);
    }
}
