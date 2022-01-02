<?php

namespace App\Http\Middleware;

use App\Models\SiteStat;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteStatMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $stat = new SiteStat;
        if(Auth::check()) {
            $stat->user_id = Auth::user()->id;
        }

        $stat->action = 'page-visit';

        if($request->wantsJson()) {
            $stat->api = true;
            $stat->action = 'api-call';
        }

        $stat->route = $request->path();
        $stat->ip = $request->ip();
        $stat->save();

        return $next($request);
    }
}
