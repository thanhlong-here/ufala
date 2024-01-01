<?php

namespace App\Http\Middleware;

use App\Classes\Journey;
use App\Models\Link;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LinkShort
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $short = Link::whereShort($request->short)->firstOr(function () {
            return abort('404');
        });
        Journey::change(['ref' => $short]);
        $request->route()->setParameter('short', $short);

        return $next($request);

      
    }
}
