<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function sm_email_template_welcome()
    {
        return view('sm_email_template_welcome');
    }

    public function sm_email_template_order_confirm()
    {
        return view('sm_email_template_order_confirm');
    }

    public function sm_email_template_payment()
    {
        return view('sm_email_template_payment');
    }

    public function sm_email_template_forgot_password()
    {
        return view('sm_email_template_forgot_password');
    }

    public function sm_email_template_activate()
    {
        return view('sm_email_template_activate');
    }

    public function sm_email_template_birthday()
    {
        return view('sm_email_template_birthday');
    }

    public function sm_email_template_large_table()
    {
        return view('sm_email_template_large_table');
    }

    public function sm_email_template_small_table()
    {
        return view('sm_email_template_small_table');
    }
}
