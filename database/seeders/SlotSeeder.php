<?php

namespace Database\Seeders;

use App\Models\Slot;
use Illuminate\Database\Seeder;

class SlotSeeder extends Seeder
{
    public function run()
    {
        $slots = [
            [
                'name' => 'Hotel',
                'capacity' => null,
                'public' => true,
                'image' => 'https://i.imgur.com/T1DSuGd.png',
            ],
            [
                'name' => 'Sybse',
                'capacity' => 20,
                'image' => 'https://i.imgur.com/KbIfJZp.png',
            ],
            [
                'name' => 'ACC',
                'capacity' => 20,
                'image' => 'https://i.imgur.com/aNkOBZ8.png',
            ],
            [
                'name' => 'Cargotras',
                'capacity' => 10,
                'image' => 'https://i.imgur.com/AUh77dP.png',
            ],
            [
                'name' => 'Bus Station',
                'capacity' => 10,
                'image' => 'https://i.imgur.com/TWGq74Q.jpg',
            ],
            [
                'name' => 'Parking Area',
                'capacity' => 5,
                'image' => 'https://i.imgur.com/AUh77dP.png',
            ],
            [
                'name' => 'Trameri',
                'capacity' => 10,
                'image' => 'https://i.imgur.com/ZAGSAWq.png',
            ],
            [
                'name' => 'Stokes',
                'capacity' => 5,
                'image' => 'https://i.imgur.com/KbIfJZp.png',
            ],
            [
                'name' => 'Garage',
                'capacity' => 5,
                'image' => 'https://i.imgur.com/0xW6fkj.png',
            ],
            [
                'name' => 'Kaarfor',
                'capacity' => 10,
                'image' => 'https://i.imgur.com/SI77dTR.png',
            ],
            [
                'name' => 'TruckersMP HQ',
                'capacity' => 5,
                'image' => 'https://i.imgur.com/K2GJ5pX.png',
            ],
            [
                'name' => 'eAcres',
                'capacity' => 5,
                'image' => 'https://i.imgur.com/cLyPSs6.png',
            ],
            [
                'name' => '12',
                'capacity' => 15,
                'image' => 'https://i.imgur.com/dh9V3wl.jpg',
            ],
            [
                'name' => '13',
                'capacity' => 10,
                'image' => 'https://i.imgur.com/ZWNxsu3.jpg',
            ],
            [
                'name' => '14',
                'capacity' => 10,
                'image' => 'https://i.imgur.com/8NE6Szo.jpg',
            ],
            [
                'name' => '15',
                'capacity' => 10,
                'image' => 'https://i.imgur.com/Bh1HOfb.jpg',
            ],
            [
                'name' => '16',
                'capacity' => 10,
                'image' => 'https://i.imgur.com/8WrL5H9.jpg',
            ],
            [
                'name' => '17',
                'capacity' => 10,
                'image' => 'https://i.imgur.com/P3UKohi.jpg',
            ],
            [
                'name' => '18',
                'capacity' => 10,
                'image' => 'https://i.imgur.com/oRAckhP.jpg',
            ],
        ];

        foreach ($slots as $slot) {
            $s = new Slot;
            $s->name = $slot['name'];
            $s->public = $slot['public'] ?? false;
            $s->capacity = $slot['capacity'];
            $s->image = $slot['image'];
            $s->save();
        }
    }
}
