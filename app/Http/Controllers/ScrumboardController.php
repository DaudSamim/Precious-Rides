<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScrumboardController extends Controller
{
    public function index()
    {
        return view('scrumboard');
    }
}
