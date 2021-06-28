<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function editors()
    {
        return view('editors');
    }

    public function form_elements()
    {
        return view('form_elements');
    }

    public function form_plugins()
    {
        return view('form_plugins');
    }

    public function form_validation()
    {
        return view('form_validation');
    }

    public function form_xeditable()
    {
        return view('form_xeditable');
    }
}
