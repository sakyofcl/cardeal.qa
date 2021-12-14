<?php

namespace App\Http\Middleware\app\admin\cors;

use Closure;

class CorsMiddlware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request)
        ->header('Access-Control-Allow-Origin','https://admin.cardeals.qa')
        ->header('Access-Control-Allow-Methods','POST,GET')
        ->header('Access-Control-Allow-Headers','Accept,Authorization,Content-Type');
    }
}
