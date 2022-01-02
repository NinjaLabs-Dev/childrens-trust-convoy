<?php

namespace App\Http\Controllers\Dashboard\Resources;

use App\Http\Controllers\Controller;
use App\Models\Route;
use Illuminate\Http\Request;

class RouteManagementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request, Route $route)
    {
        $route->start = $request->start;
        $route->end = $request->end;
        $route->start_time = $request->start_time;
        $route->truckfest = $request->truckfest;
        $route->image = $request->image;
        $route->save();

        return response()->json(["Success" => true]);
    }
}
