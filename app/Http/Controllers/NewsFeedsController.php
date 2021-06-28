<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsFeedsController extends Controller
{
    public function index()
    {
        return view('news_feeds');
    }

}
