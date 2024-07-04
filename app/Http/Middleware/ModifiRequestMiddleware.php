<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ModifiRequestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {   
        # add header
        //$request->headers->add(['email' => 'saidur@gmail.com']);


        # Replace header
        $request->headers->replace(['sec-fetch-dest' => 'hello world']);

        return $next($request);
    }
}
