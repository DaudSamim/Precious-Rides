<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IconsController extends Controller
{
    public function font_awesome()
    {
        return view('font_awesome');
    }

    public function material_icons()
    {
        return view('material_icons');
    }

    public function simple_lineicons()
    {
        return view('simple_lineicons');
    }

    public function weather_icons()
    {
        return view('weather_icons');
    }

    public function ion_icons()
    {
        return view('ion_icons');
    }
}
