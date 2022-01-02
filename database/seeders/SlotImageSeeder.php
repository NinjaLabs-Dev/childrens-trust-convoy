<?php

namespace Database\Seeders;

use App\Models\SlotImage;
use Illuminate\Database\Seeder;

class SlotImageSeeder extends Seeder
{
    public function run()
    {
        $image = new SlotImage;
        $image->name = 'template-route.png';
        $image->dir = 'route-images/template-route.png';
        $image->url = 'https://children-trust-convoy.s3.fr-par.scw.cloud/route-images/template-route.png';
        $image->mime = 'image/png';
        $image->save();
    }
}
