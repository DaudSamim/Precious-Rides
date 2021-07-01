<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class APIController extends Controller
{
	public function sign_up(Request $request){
		if(!isset($request->email) || !isset($request->number)){
			$data = 'Email and Contact Number is required';
			return json_encode($data);
		}

		if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
		  	$data = 'Email Format is not okay';
			return json_encode($data);
		} 

		if(!is_numeric($request->number) || strlen($request->number) != 11){
			$data = 'Number Format is not okay';
			return json_encode($data);
		}

		if(DB::table('clients')->where('email',$request->email)->first()){
			$data = 'Email already registered';
			return json_encode($data);
		}

		DB::table('clients')->insert([
			'email' => $request->email,
			'number' => $request->number, 
		]);

		$status = 200;
		$message = 'Client Successfully Stored';
		$data = DB::table('clients')->orderBy('id','desc')->first();

		$response = (object) null;
		$response->status = $status;
		$response->message = $message;
		$response->data = $data;

		return json_encode($response);
	}

	public function all_clients(){
		$data = DB::table('clients')->get();
		return json_encode($data);
	}
}