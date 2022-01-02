<?php

namespace App\Http\Controllers\Dashboard\Pages;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Route;
use App\Models\Slot;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $slots = Slot::all();
        $routes = Route::all();

        return view('pages.dashboard.home')->with('slots', $slots)->with('routes', $routes);
    }
}
