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
                'number' => 0,
                'capacity' => null,
                'public' => true,
                'image' => 'https://i.imgur.com/ScOGgxV.jpg',
            ],
            [
                'number' => 1,
                'capacity' => 20,
                'image' => 'https://i.imgur.com/SmnIWlW.jpg',
            ],
            [
                'number' => 2,
                'capacity' => 20,
                'image' => 'https://i.imgur.com/I1z4x3S.jpg',
            ],
            [
                'number' => 3,
                'capacity' => 10,
                'image' => 'https://i.imgur.com/tusYRdh.jpg',
            ],
            [
                'number' => 4,
                'capacity' => 10,
                'image' => 'https://i.imgur.com/TWGq74Q.jpg',
            ],
            [
                'number' => 5,
                'capacity' => 5,
                'image' => 'https://i.imgur.com/pOD5Sip.jpg',
            ],
            [
                'number' => 6,
                'capacity' => 10,
                'image' => 'https://i.imgur.com/EmOS3Of.jpg',
            ],
            [
                'number' => 7,
                'capacity' => 5,
                'image' => 'https://i.imgur.com/hT3FRfW.jpg',
            ],
            [
                'number' => 8,
                'capacity' => 5,
                'image' => 'https://i.imgur.com/5dVPBcz.jpg',
            ],
            [
                'number' => 9,
                'capacity' => 10,
                'image' => 'https://i.imgur.com/lb2KVuT.jpg',
            ],
            [
                'number' => 10,
                'capacity' => 5,
                'image' => 'https://i.imgur.com/CcsCvKC.jpg',
            ],
            [
                'number' => 11,
                'capacity' => 5,
                'image' => 'https://i.imgur.com/PuR6k2E.jpg',
            ],
            [
                'number' => 12,
                'capacity' => 15,
                'image' => 'https://i.imgur.com/dh9V3wl.jpg',
            ],
            [
                'number' => 13,
                'capacity' => 10,
                'image' => 'https://i.imgur.com/ZWNxsu3.jpg',
            ],
            [
                'number' => 14,
                'capacity' => 10,
                'image' => 'https://i.imgur.com/8NE6Szo.jpg',
            ],
            [
                'number' => 15,
                'capacity' => 10,
                'image' => 'https://i.imgur.com/Bh1HOfb.jpg',
            ],
            [
                'number' => 16,
                'capacity' => 10,
                'image' => 'https://i.imgur.com/8WrL5H9.jpg',
            ],
            [
                'number' => 17,
                'capacity' => 10,
                'image' => 'https://i.imgur.com/P3UKohi.jpg',
            ],
            [
                'number' => 18,
                'capacity' => 10,
                'image' => 'https://i.imgur.com/oRAckhP.jpg',
            ],
        ];

        foreach ($slots as $slot) {
            $s = new Slot;
            $s->number = $slot['number'];
            $s->public = $slot['public'] ?? false;
            $s->capacity = $slot['capacity'];
            $s->image = $slot['image'];
            $s->save();
        }
    }
}
