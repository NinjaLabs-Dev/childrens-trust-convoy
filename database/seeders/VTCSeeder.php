<?php

namespace Database\Seeders;

use App\Models\VTC;
use Illuminate\Database\Seeder;

class VTCSeeder extends Seeder
{
    public function run()
    {
        $vtcs = [
            [
                'id' => 1,
                'name' => 'TruckersFM',
                'truckersmp_id' => 323,
                'expected_attendance' => 0
            ]
        ];

        foreach ($vtcs as $vtc) {
            $v = new VTC;
            $v->id = $vtc['id'];
            $v->name = $vtc['name'];
            $v->truckersmp_id = $vtc['truckersmp_id'];
            $v->expected_attendance = $vtc['expected_attendance'];
            $v->save();
        }
    }
}
