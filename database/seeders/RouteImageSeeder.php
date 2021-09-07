<?php

namespace Database\Seeders;

use App\Models\RouteImage;
use Illuminate\Database\Seeder;

class RouteImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $image = new RouteImage;
        $image->name = 'template-route.png';
        $image->dir = 'route-images/template-route.png';
        $image->url = 'https://children-trust-convoy.s3.fr-par.scw.cloud/route-images/template-route.png';
        $image->mime = 'image/png';
        $image->save();
    }
}
