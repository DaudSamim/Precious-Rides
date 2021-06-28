<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartsController extends Controller
{
    public function amchart()
    {
        return view('amchart');
    }

    public function chartist()
    {
        return view('chartist');
    }

    public function chartjs()
    {
        return view('chartjs');
    }

    public function echarts()
    {
        return view('echarts');
    }

    public function flotchart()
    {
        return view('flotchart');
    }

    public function fusionchart()
    {
        return view('fusionchart');
    }

    public function highchart()
    {
        return view('highchart');
    }

    public function morrischart()
    {
        return view('morrischart');
    }

    public function rickshaw()
    {
        return view('rickshaw');
    }


}
