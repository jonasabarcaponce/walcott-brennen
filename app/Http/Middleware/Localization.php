<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Session::has('locale')) {
            $locale = Session::get('locale');
            if (array_key_exists($locale, config('app.available_locales'))) {
                app()->setLocale($locale);
            }
        } else {
            // Set default locale if not set in session
            app()->setLocale(config('app.fallback_locale'));
        }
        return $next($request); 
    }
}

