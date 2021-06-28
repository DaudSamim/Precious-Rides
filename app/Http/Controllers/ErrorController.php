<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function page_400()
    {
        return view('page_400');
    }

    public function page_500()
    {
        return view('page_500');
    }

    public function page_503()
    {
        return view('page_503');
    }
}
