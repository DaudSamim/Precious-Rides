<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PnrReportController extends Controller
{
    public function index()
    {
        return view('pnr');
    }
}
