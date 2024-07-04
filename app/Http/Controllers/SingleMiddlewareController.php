<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleMiddlewareController extends Controller
{
    //
    function singleMiddleware(Request $request)
    {
        return "Hello single middleware";
    }
}
