<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class APIController extends Controller
{
	public function sign_up(Request $request){

		$response = (object) null;

		if(!isset($request->email) || !isset($request->number)){
			$status = 400;
			$message = 'Email and Contact Number is required';
			$data = null;
			$response->status = $status;
			$response->message = $message;
			$response->data = $data;
			return json_encode($response);
		}

		if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
			$status = 400;
			$message = 'Email Format is not okay';
			$data = null;
			$response->status = $status;
			$response->message = $message;
			$response->data = $data;
			return json_encode($response);
		} 

		if(!is_numeric($request->number) || strlen($request->number) != 11){
			$status = 400;
			$message = 'Number Format is not okay';
			$data = null;
			$response->status = $status;
			$response->message = $message;
			$response->data = $data;
			return json_encode($response);
		}

		if(DB::table('clients')->where('email',$request->email)->first()){
			$status = 400;
			$message = 'Email already registered';
			$data = null;
			$response->status = $status;
			$response->message = $message;
			$response->data = $data;
			return json_encode($response);
		}

		DB::table('clients')->insert([
			'email' => $request->email,
			'number' => $request->number, 
		]);

		$status = 200;
		$message = 'Client Successfully Stored';
		$data = DB::table('clients')->orderBy('id','desc')->first();

		
		$response->status = $status;
		$response->message = $message;
		$response->data = $data;

		return json_encode($response);
	}

	public function login(Request $request){
		$response = (object) null;
		if(!isset($request->number)){
			$status = 400;
			$message = 'Contact Number is required';
			$data = null;
			$response->status = $status;
			$response->message = $message;
			$response->data = $data;
			return json_encode($response);
		}

		$data = DB::table('clients')->where('number',$request->number)->first();
		$data->code = 1234;
		$status = 200;
		$message = 'Login Successfully';

		$response->status = $status;
		$response->message = $message;
		$response->data = $data;

		return json_encode($response);

	}

	public function profile_update(Request $request){
		$response = (object) null;
		if(!isset($request->id)){
			$status = 400;
			$message = 'Client Id is required';
			$data = null;
			$response->status = $status;
			$response->message = $message;
			$response->data = $data;
			return json_encode($response);
		}

		if(isset($request->name)){
			DB::table('clients')->where('id',$request->id)->update([
				'name' => $request->name,
			]);
		}

		if(isset($request->location)){
			DB::table('clients')->where('id',$request->id)->update([
				'location' => $request->location,
			]);
		}

		if(isset($request->imei)){
			DB::table('clients')->where('id',$request->id)->update([
				'imei' => $request->imei,
			]);
		}

		if(isset($request->birthday)){
			DB::table('clients')->where('id',$request->id)->update([
				'birthday' => $request->birthday,
			]);
		}

		$response->status = 200;
		$response->message = 'Successfully Updated';
		$response->data = DB::table('clients')->where('id',$request->id)->first();
		return json_encode($response);
	}
}