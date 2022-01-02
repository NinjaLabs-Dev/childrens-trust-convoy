<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Route;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class RouteImageController extends Controller
{
    public function index(Route $route) {
        return Cache::remember('route-image-' . $route->id, 500, function() use ($route) {
            if(is_null($route->route_image)) return $this->notFound();

            return response(Storage::get($route->route_image->dir))->withHeaders([
                'Content-Type' => $route->route_image->type
            ]);
        });
    }

    private function notFound() {
        return Response::json(array('error' => true, 'message' => 'Image missing'), 404);
    }
}
