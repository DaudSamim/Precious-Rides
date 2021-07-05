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
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);
        
        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']]))
        {
            return redirect()->route('dashboard');
        }
        else return redirect()->back()->with('info', "Incorrect Email or Password");
           
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
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

    public function postOwner(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'username' => 'required|unique:owners',
            'password' => 'required|min:6|required_with:confirm_password|same:confirm_password',

        ]);

          DB::Table('owners')->insert([
                'name' => $request->name,
                'username' => $request->username,
                'password' => bcrypt($request->password),
                'primary_number' => $request->primary_number,
                'secondary_number' => $request->secondary_number,
                'email' => $request->email,
                'address' => $request->address,
                'status' => $request->status,

            ]);

             return redirect('/registration/owner')->with('success','Successfully Registered');
    }

    public function promoCode(){
        $promo = DB::table('promo_codes')->orderBy('id','desc')->get();
        return view('promo_code',compact('promo'));
    }

    public function addPromo(){
        return view ('add_promo');
    }

    public function postPromo(Request $request){
        $this->validate($request, [
            'code' => 'required|min:6|max:6|unique:promo_codes',
            'discount' => 'required|min:1|max:100',
            'expiry' => 'required',

        ]);

          DB::Table('promo_codes')->insert([
                'code' => $request->code,
                'discount' => $request->discount,
                'expiry' => $request->expiry,

            ]);

             return redirect('promo_code')->with('success','Successfully Registered');
    }


}
