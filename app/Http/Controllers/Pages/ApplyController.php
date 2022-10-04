<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Slot;
use Carbon\Carbon;
use Illuminate\Support\Facades\View;

class ApplyController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $applications = Application::current();

        return view('pages.apply')->with('applications', $applications);
    }

    public function show(Application $application) {
        $view = 'pages.applications.' . $application->route;

        if(!View::exists($view) || Carbon::parse($application->end)->isPast()) {
            return abort(404);
        }

        $slots = Slot::where('vacant', true)->where('public', false)->orderBy('name')->get();

        return view($view)->with('application', $application)->with('slots', $slots);
    }
}
