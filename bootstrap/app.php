<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\GroupMiddleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {

        //Group Middleware
        $middleware->appendToGroup("GroupMiddleware", [
            'throttle:3,1',
            GroupMiddleware::class
        ]);


        // web route middleware. Apply for all routes in web.php
        /*
        $middleware->web(appent: [

            GroupMiddleware::class

        ]);
        */


        // Api route middleware. Apply for all routes in api.php
        /*
        $middleware->api(appent: [
            GroupMiddleware::class
        ]);
        */
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
