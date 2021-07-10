<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class DriverController extends Controller
{
    public function index()
    {

        return view('add_driver');
    }

    public function post_driver(Request $request)
    {



     DB::table('drivers')->insert([
         'name' => $request->name,
         'user_name' => $request->user_name,
         'password' =>bcrypt( $request->password),
         'mobile' => $request->mobile,
         'mobile_second' => $request->mobile_second,
         'address' => $request->address,
         'imei' =>$request->imei,
        //  'status' => $request->status,
         'email' => $request->email,
         'licence_number' => $request->licence_number,
         'licence_due' => $request->licence_due,
         'badge_number' => $request->badge_number,
         'badge_number_due' => $request->badge_number_due,


     ]);

     return redirect()->back();


    }


    public function list()
    {
        DB::table('drivers')->first();

        return view('driver');
    }

    public function data()
    {
        $owners = DB::table('drivers')->get();
        return $owners;
    }
}
