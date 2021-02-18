<?php

namespace ErikFig\Core\StarterKit\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use ErikFig\Core\StarterKit\Translation\ListAll;
use Inertia\Inertia;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();
        if ($user) {
            $locale = $user->locale;

            App::setLocale($locale);
        }

        Inertia::share('trans', ListAll::all());

        return $next($request);
    }
}
