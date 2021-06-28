<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingPlannerController extends Controller
{
    public function index()
    {
        return view('booking_planner');
    }
}
