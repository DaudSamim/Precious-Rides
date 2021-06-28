<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bookingv1Controller extends Controller
{
    public function index()
    {
        return view('booking_v1');
    }
}
