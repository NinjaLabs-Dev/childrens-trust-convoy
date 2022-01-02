<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Route;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class RouteController extends Controller
{
    public function index()
    {
        return view('pages.routes')->with('routes', $this->routes());
    }

    public function show(Route $route) {
        $truckfests = Route::where('truckfest', true)->count();

        return view('pages.routes')->with('routes', $this->routes())->with('route', ($route->id - $truckfests) - 1);
    }

    private function routes() {
        return Route::where('truckfest', false)->orderBy('number')->get();
    }
}
