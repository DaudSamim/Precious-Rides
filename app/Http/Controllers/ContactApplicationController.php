<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactApplicationController extends Controller
{
    public function index()
    {
        return view('contact_application');
    }

}
