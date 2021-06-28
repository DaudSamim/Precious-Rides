<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PricingTableController extends Controller
{
    public function index()
    {
        return view('pricing_table');
    }
}
