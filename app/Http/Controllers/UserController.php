<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\DeclareDeclare;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserController extends Controller
{
    public function getLogin()
    {
        return view('login_page');
    }

    public function postLogin(Request $request)
    {
       // dd($request);
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);
        
        if (Auth::guard('web')->attempt(['username' => $request['username'], 'password' => $request['password']]))
        {
           
            return redirect('/login');
        }
        else return redirect()->back()->with('info', "Incorrect username or password");
           
    }

    public function getRegister()
    {
        return view('login_page');
    }

    public function postRegister(Request $request)
    {
         $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:6|required_with:confirm_password|same:confirm_password',

        ]);
       // dd($request);

      
             DB::Table('users')->insert([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);

             return redirect('/login')->with('success','Successfully Registered');
    }


}
