<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestModifierController extends Controller
{
    //
    function reqModify(Request $request):array
    {
        return request()->header();
    }
}
