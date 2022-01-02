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
                'image' => 1,
            ],
            [
                'number' => 1,
                'capacity' => 20,
                'image' => 1,
            ],
            [
                'number' => 2,
                'capacity' => 20,
                'image' => 1,
            ],
            [
                'number' => 3,
                'capacity' => 10,
                'image' => 1,
            ],
            [
                'number' => 4,
                'capacity' => 10,
                'image' => 1,
            ],
            [
                'number' => 5,
                'capacity' => 5,
                'image' => 1,
            ],
            [
                'number' => 6,
                'capacity' => 10,
                'image' => 1,
            ],
            [
                'number' => 7,
                'capacity' => 5,
                'image' => 1,
            ],
            [
                'number' => 8,
                'capacity' => 5,
                'image' => 1,
            ],
            [
                'number' => 9,
                'capacity' => 10,
                'image' => 1,
            ],
            [
                'number' => 10,
                'capacity' => 5,
                'image' => 1,
            ],
            [
                'number' => 11,
                'capacity' => 5,
                'image' => 1,
            ],
            [
                'number' => 12,
                'capacity' => 15,
                'image' => 1,
            ],
            [
                'number' => 13,
                'capacity' => 10,
                'image' => 1,
            ],
            [
                'number' => 14,
                'capacity' => 10,
                'image' => 1,
            ],
            [
                'number' => 15,
                'capacity' => 10,
                'image' => 1,
            ],
            [
                'number' => 15,
                'capacity' => 10,
                'image' => 1,
            ],
            [
                'number' => 16,
                'capacity' => 10,
                'image' => 1,
            ],
            [
                'number' => 17,
                'capacity' => 10,
                'image' => 1,
            ],
            [
                'number' => 18,
                'capacity' => 10,
                'image' => 1,
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
