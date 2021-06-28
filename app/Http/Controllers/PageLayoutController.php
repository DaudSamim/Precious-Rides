<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageLayoutController extends Controller
{
    public function sidebar_layout()
    {
        return view('sidebar_layout');
    }

    public function both_menubar()
    {
        return view('both_menubar');
    }

    public function fixed_both_nav()
    {
        return view('fixed_both_nav');
    }

    public function fixed_footer()
    {
        return view('fixed_footer');
    }

    public function fixed_menu_bar()
    {
        return view('fixed_menu_bar');
    }

    public function horizontal_layout()
    {
        return view('horizontal_layout');
    }

    public function minified_sidebar()
    {
        return view('minified_sidebar');
    }

    public function sidebar_fixed_nav()
    {
        return view('sidebar_fixed_nav');
    }

    public function top_nav_fixed()
    {
        return view('top_nav_fixed');
    }

    public function unfixed_footer()
    {
        return view('unfixed_footer');
    }
}
