<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CCCollectionsController extends Controller
{
    public function index()
    {
        return view('cc_collections');
    }

}
