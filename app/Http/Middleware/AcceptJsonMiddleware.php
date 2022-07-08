<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AcceptJsonMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $request->headers->set('Accept', 'application/json');
        $request->headers->set('Content-Type', 'multipart/form-data');

        return $next($request);
    }
}
