<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupMiddlewareController extends Controller
{
    // group middle ware
    function middlewareDemo1(Request $request):string
    {
        return "Demo Middleware 1";
    }


    function middlewareDemo2(Request $request):string
    {
        return "Demo Middleware 2";
    }


    function middlewareDemo3(Request $request):string
    {
        return "Demo Middleware 3";
    }


    function middlewareDemo4(Request $request):string
    {
        return "Demo Middleware 4";
    }


    function middlewareDemo5(Request $request):string
    {
        return "Demo Middleware 5";
    }
}
