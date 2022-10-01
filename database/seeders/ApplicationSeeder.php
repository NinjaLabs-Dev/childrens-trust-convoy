<?php

namespace Database\Seeders;

use App\Models\Application;
use Illuminate\Database\Seeder;

class ApplicationSeeder extends Seeder
{
    public function run()
    {
        $apps = [
            [
                'title' => 'Staff',
                'description' => 'Help run or advertise the event!',
                'end' => 1693915636,
                'route' => 'staff',
                'button_text' => 'Apply'
            ],
            [
                'title' => 'Slot Booking',
                'description' => 'Bring your VTC to the event and make sure you\'ve got somewhere to park.',
                'end' => 1693915636,
                'route' => 'slot',
                'button_text' => 'Book'
            ]
        ];

        foreach ($apps as $app) {
            $a = new Application;
            $a->title = $app['title'];
            $a->description = $app['description'];
            $a->end = $app['end'];
            $a->route = $app['route'];
            $a->button_text = $app['button_text'];
            $a->save();
        }
    }
}
