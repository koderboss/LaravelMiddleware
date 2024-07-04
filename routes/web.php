<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SingleMiddlewareController;
use App\Http\Controllers\GroupMiddlewareController;
use App\Http\Controllers\RequestModifierController;
use App\Http\Middleware\SingleMiddleware;
use App\Http\Middleware\ModifiRequestMiddleware;

Route::get('/', function () {
    return view('welcome');
});


// Single/specific route middle ware
Route::get('/singleMiddleware/{key}', [SingleMiddlewareController::class, 'singleMiddleware'])->middleware([SingleMiddleware::class]);


// Group middleware
Route::middleware( ["GroupMiddleware"])->group(function(){

    Route::get('/middlewareDemo1/{key}', [GroupMiddlewareController::class, 'middlewareDemo1']);
    Route::get('/middlewareDemo2/{key}', [GroupMiddlewareController::class, 'middlewareDemo2']);
    Route::get('/middlewareDemo3/{key}', [GroupMiddlewareController::class, 'middlewareDemo3']);
    Route::get('/middlewareDemo4/{key}', [GroupMiddlewareController::class, 'middlewareDemo4']);
    Route::get('/middlewareDemo5/{key}', [GroupMiddlewareController::class, 'middlewareDemo5']);

});



// Modify Request header middleware
Route::get('/requestmodifier', [RequestModifierController::class, 'reqModify'])->middleware([ModifiRequestMiddleware::class]);

