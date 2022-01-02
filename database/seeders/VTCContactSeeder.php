<?php

namespace Database\Seeders;

use App\Models\VTC;
use App\Models\VTCContact;
use Illuminate\Database\Seeder;

class VTCContactSeeder extends Seeder
{
    public function run()
    {
        $vtcs = [
            [
                'vtc' => 1,
                'name' => 'Nathan',
                'role' => 'Manager',
                'discord' => 'Nath#3000',
                'truckersmp_id' => 438948
            ]
        ];

        foreach ($vtcs as $vtc) {
            $v = new VTCContact;
            $v->vtc = $vtc['vtc'];
            $v->name = $vtc['name'];
            $v->role = $vtc['role'];
            $v->discord = $vtc['discord'];
            $v->truckersmp_id = $vtc['truckersmp_id'];
            $v->save();
        }
    }
}
