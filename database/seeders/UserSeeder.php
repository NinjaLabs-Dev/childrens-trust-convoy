<?php

namespace Database\Seeders;

use App\Models\User;
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
        \App\Models\User::factory(10)->create();

        $user = new User;
        $user->name = "Ninja";
        $user->email = "fraser@ninjalabs.co.uk";
        $user->password = bcrypt("&!FcXjGIebOUj2Rf0J^wX");
        $user->save();
    }
}
