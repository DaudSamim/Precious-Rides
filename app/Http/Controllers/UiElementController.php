<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UiElementController extends Controller
{
    public function alert()
    {
        return view('alert');
    }

    public function accordion()
    {
        return view('accordion');
    }

    public function badges()
    {
        return view('badges');
    }

    public function button()
    {
        return view('button');
    }

    public function carousel()
    {
        return view('carousel');
    }

    public function dropdowns()
    {
        return view('dropdowns');
    }

    public function googlemap()
    {
        return view('googlemap');
    }

    public function lightbox()
    {
        return view('lightbox');
    }

    public function modals()
    {
        return view('modals');
    }

    public function notification()
    {
        return view('notification');
    }

    public function pagination()
    {
        return view('pagination');
    }

    public function progressbar()
    {
        return view('progressbar');
    }

    public function spinerbuttons()
    {
        return view('spinerbuttons');
    }

    public function sweetalerts()
    {
        return view('sweetalerts');
    }

    public function tabs()
    {
        return view('tabs');
    }

    public function timeline()
    {
        return view('timeline');
    }

    public function treeview()
    {
        return view('treeview');
    }

    public function typography()
    {
        return view('typography');
    }

    public function vectormap()
    {
        return view('vectormap');
    }
}
