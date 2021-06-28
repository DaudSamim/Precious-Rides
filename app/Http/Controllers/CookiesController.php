<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CookiesController extends Controller
{
    public function cookies_v1()
    {
        return view('cookies_v1');
    }

    public function cookies_v2()
    {
        return view('cookies_v2');
    }

    public function cookies_v3()
    {
        return view('cookies_v3');
    }

}
