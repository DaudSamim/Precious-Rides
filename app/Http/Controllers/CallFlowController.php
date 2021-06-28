<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CallFlowController extends Controller
{
    public function index()
    {
        return view('call_flow');
    }
}
