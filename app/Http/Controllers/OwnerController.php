<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class OwnerController extends Controller
{
    public function index()
    {
        return view('add_owner');
    }

    public function list()
    {
        $owners = DB::table('owners')->get();
        $owners = DB::table('owners')->orderBy('id','desc')->get();
        return view('owner',compact('owners'));
    }


    public function list_data()
    {
        $owners = DB::table('owners')->get();
        return $owners;
    }
}
