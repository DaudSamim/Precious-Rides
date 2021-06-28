<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function login_v1()
    {
        return view('login_v1');
    }

    public function login_v2()
    {
        return view('login_v2');
    }

    public function registration_v1()
    {
        return view('registration_v1');
    }

    public function registration_v2()
    {
        return view('registration_v2');
    }

    public function reset_password()
    {
        return view('reset_password');
    }

    public function forgot_password()
    {
        return view('forgot_password');
    }

    public function lock_screen()
    {
        return view('lock_screen');
    }
}
