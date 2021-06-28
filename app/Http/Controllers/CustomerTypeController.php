<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerTypeController extends Controller
{
    public function index()
    {
        return view('add_customer_type_master');
    }
}
