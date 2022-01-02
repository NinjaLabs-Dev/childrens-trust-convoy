<?php

namespace App\Http\Middleware;

use App\Models\Route;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;

class EventCountdownMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $nextEvent = Route::where('start_time', '>=', Carbon::now()->timestamp)->orderBy('start_time', 'asc')->first();

        view()->share('next_event', $nextEvent);

        return $next($request);
    }
}
