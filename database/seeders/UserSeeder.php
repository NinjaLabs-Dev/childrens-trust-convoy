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
        //\App\Models\User::factory(10)->create();

        $user = new User;
        $user->name = "Ninja";
        $user->email = "fraser@ninjalabs.co.uk";
        $user->password = bcrypt("29B43mVnJ2v5!2fgTz!LL58N");
        $user->save();

        $user = new User;
        $user->name = "Lightning";
        $user->email = "avxlightning1@gmail.com";
        $user->password = bcrypt("h4DJE7Vr8mqW%YdE*6n7WQa&");
        $user->save();

        $user = new User;
        $user->name = "Harry";
        $user->email = "hjdunn5@gmail.com";
        $user->password = bcrypt("rHQitwFjq4KRZ3NW*LhXDY$$");
        $user->save();
    }
}
