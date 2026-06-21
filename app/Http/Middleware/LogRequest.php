<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LogRequest
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

         //before middleware
        // if (app()->environment('local')) {
        // \Log::info('Request Recived'.$request->url());
        // }
        // return $next($request);


        // after middleware
        $response = $next($request);
        \Log::info('Response ja raha hai: ' . $response->getStatusCode());
        return $response;
    }
}
