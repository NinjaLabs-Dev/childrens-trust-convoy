<?php

namespace Database\Seeders;

use App\Models\Route;
use Illuminate\Database\Seeder;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $routes = [
            [
                'number' => 0,
                'start' => 'Stavanger',
                'start_time' => 1644670800,
                'end' => 'Stavanger',
                'image' => 1,
                'truckfest' => true
            ],
            [
                'number' => 1,
                'start' => 'Stavanger',
                'start_time' => 1644674400,
                'end' => 'Karlskrona',
                'image' => 1
            ],
            [
                'number' => 2,
                'start' => 'Gdansk',
                'start_time' => 1644683400,
                'end' => 'Daugavpils',
                'image' => 1
            ],
            [
                'number' => 3,
                'start' => 'Daugavpils',
                'start_time' => 1644692400,
                'end' => 'Lublin',
                'image' => 1
            ],
            [
                'number' => 4,
                'start' => 'Lublin',
                'start_time' => 1644703200,
                'end' => 'Lasi',
                'image' => 1
            ],
            [
                'number' => 5,
                'start' => 'Lasi',
                'start_time' => 1644712200,
                'end' => 'Pecs',
                'image' => 1
            ],
            [
                'number' => 6,
                'start' => 'Pecs',
                'start_time' => 1644721200,
                'end' => 'Innsbruck',
                'image' => 1
            ],
            [
                'number' => 7,
                'start' => 'Innsbruck',
                'start_time' => 1644728400,
                'end' => 'Livorno',
                'image' => 1
            ],
            [
                'number' => 8,
                'start' => 'Livorno',
                'start_time' => 1644741000,
                'end' => 'Bayonne',
                'image' => 1
            ],
            [
                'number' => 9,
                'start' => 'Bavonne',
                'start_time' => 1644750000,
                'end' => 'Cordoba',
                'image' => 1
            ],
        ];

        foreach ($routes as $route) {
            $r = new Route;
            $r->number = $route['number'];
            $r->start = $route['start'];
            $r->start_time = $route['start_time'];
            $r->end = $route['end'];
            $r->image = $route['image'];
            $r->save();
        }
    }
}
