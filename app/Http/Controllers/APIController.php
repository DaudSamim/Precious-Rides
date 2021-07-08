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

		if(isset($_GET['id']))
		{
		   $id = $_GET['id'] ;
		};


		$status = 200;
		$message = 'Client Successfully Stored';
		$data = DB::table('clients')->orderBy('id','desc')->first();

		$response = (object) null;
		$response->status = $status;
		$response->message = $message;
		$response->data = $data;

		return json_encode($response);
	}
	public function add_enquiries(Request $request){
		if(!isset($request->name) || !isset($request->number) || !isset($request->type) || !isset($request->enquiry)){
			$data = 'Name, Contact Number,Enquiry and Enquiry Type is required';
			return json_encode($data);
		}

		if(!is_numeric($request->number) || strlen($request->number) != 11){
			$data = 'Number Format is not okay';
			return json_encode($data);
		}
	
		DB::table('enquiries')->insert([
			'name' => $request->name,
			'number' => $request->number, 

		]);
		$response = 'Enquiry Successfully Sent';
		return json_encode($response);
	}

	public function add_trip(Request $request){
		if(!isset($request->customer_id) || !isset($request->number) || !isset($request->from_location) || !isset($request->to_location)|| !isset($request->pickup_time)|| !isset($request->dropoff_time) || !isset($request->status)){
			$data = 'Customer ID, Mobile Number,Pickup Location, Destination, Pickup Time, Dropoff Time and Status is required';
			return json_encode($data);
		}

		if(!is_numeric($request->number) || strlen($request->number) != 11){
			$data = 'Number Format is not okay';
			return json_encode($data);
		}
	
		DB::table('trips')->insert([
			'customer_id' => $request->name,
			'mobile' => $request->number, 
			'from_location' => $request->from_location,
			'to_location' => $request->to_location,
			'pickup_time' => $request->pickup_time,
			'dropoff_time' => $request->dropoff_time,
			'status' => $request->status,

		]);
		$response = 'Trip Successfully Sent';
		return json_encode($response);
	}

	public function add_owner(Request $request){
		if(!isset($request->name) || !isset($request->number_primary) || !isset($request->number_secondary) || !isset($request->username) || !isset($request->password)|| !isset($request->email)|| !isset($request->address)|| !isset($request->status)){
			$data = 'Name, Username, Password, Email, Contact Primary Number, Contact Secondary Number, Address And Status is required';
			return json_encode($data);
		}
		$password = DB::table('owners')->where('password',$request->password)->first();
		if(isset($password)){
			$data = 'Password Already Taken';
		    return json_encode($data);
		}
		if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
			$data = 'Email Format is not okay';
		    return json_encode($data);
	  }

		if(!is_numeric($request->number_primary) || strlen($request->number_primary) != 11){
			$data = 'Number Format is not okay';
			return json_encode($data);
		}
		if(!is_numeric($request->number_secondary) || strlen($request->number_secondary) != 11){
			$data = 'Number Format is not okay';
			return json_encode($data);
		}
	
		DB::table('owners')->insert([
			'name' => $request->name,
			'username' => $request->username, 
			'password' => $request->password, 
			'primary_number' => $request->username, 
			'secondary_number' => $request->username, 
			'email' => $request->email, 
			'address' => $request->address, 
			'status' => $request->status, 



		]);
		$response = 'Enquiry Successfully Sent';
		return json_encode($response);
	}

	public function add_driver_attendance(Request $request){
		if(!isset($request->name) || !isset($request->number) || !isset($request->vid) || !isset($request->logged_in) || !isset($request->login_hours) || !isset($request->today_collection) || !isset($request->status)){
			$data = 'Driver Name, Contact Number, vid, Logged in, Login Hours, Today Collection and Status is required';
			return json_encode($data);
		}

		if(!is_numeric($request->number) || strlen($request->number) != 11){
			$data = 'Number Format is not okay';
			return json_encode($data);
		}

		if(!is_numeric($request->login_hours)){
			$data = 'Login Hours should be number of hours';
			return json_encode($data);
		}
	
		DB::table('attendance')->insert([
			'driver_name' => $request->name,
			'mobile' => $request->number, 
			'vid' => $request->vid, 
			'login_hours' => $request->login_hours, 
			'logged_in' => $request->logged_in,
			'today_collection' => $request->today_collection,
			'status' => $request->status,

		]);
		$response = 'Attendance Added Successfully';
		return json_encode($response);
	}

	public function add_driver_rating(Request $request){
		if(!isset($request->driver_id) || !isset($request->user_id) || !isset($request->rating) || !isset($request->ride_id) ){
			$data = 'Driver ID, User ID, Rating and Ride ID is required';
			return json_encode($data);
		}
        $check = DB::table('driver_ratings')->where('user_id',$request->user_id)->where('ride_id', $request->ride_id)->first();

		if(isset($check)){
			$data = 'You cannot rate twice to this ride';
			return json_encode($data);
		}
		if(!is_numeric($request->driver_id)){
			$data = 'Driver ID must be Numberic';
			return json_encode($data);
		}
		if(!is_numeric($request->user_id)){
			$data = 'User ID must be Numberic';
			return json_encode($data);
		}
		if(!is_numeric($request->ride_id)){
			$data = 'Ride ID must be Numberic';
			return json_encode($data);
		}

		if(!is_numeric($request->rating)){
			$data = 'Invalid Rating';
			return json_encode($data);
		}
		if(($request->rating < 0) || ($request->rating > 5))
		{
			$data = 'Invalid Rating, Rating should be between 0 and 5';
			return json_encode($data);
		}
	
		DB::table('driver_ratings')->insert([
			'driver_id' => $request->driver_id,
			'user_id' => $request->user_id, 
			'rating' => $request->rating, 
			'ride_id' => $request->ride_id, 
			

		]);
		$response = 'Rating Added Successfully';
		return json_encode($response);
	}

	public function postaddpromocode(Request $request){
        
		if(!isset($request->discount) || !isset($request->date)  ){
			$data = 'Discount and Expiry Date are required';
			return json_encode($data);
		}

		if(!is_numeric($request->discount)){
			$data = 'Invalid Discount Value';
			return json_encode($data);
		}      
        
        $date = date('Y-m-d', time());
        
        if($date > $request->date){
            $data = 'Invalid Expiry Date, The date entered is already expired';
			return json_encode($data);

        }
		
        

        $alph = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
        $code='';

        for($i=0;$i<7;$i++){
           $code .= $alph[rand(0, 55)];
        }
        
        

             DB::Table('promo_codes')->insert([
            
            'discount' => $request->discount,
            'code' => $code,
            'expiry' => $request->date,
            
            ]);

			$data = 'PromoCode Created';
			return json_encode($data);
    }

	public function invitefriend(Request $request){
		if(!isset($request->id)){
			$data = 'ID is required';
			return json_encode($data);
		}

		// $url = sprintf(
		// 	"%s://%s%s",
		// 	isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
		// 	$_SERVER['SERVER_NAME'],
		// 	$_SERVER['REQUEST_URI']
		//   );
		
			
		$url = "http://127.0.0.1/api/sign_up?id=".$request->id;
		return $url;
	}

	public function add_vehicle(Request $request){
		if((!isset($request->vid)) || (!isset($request->reg_no)) || (!isset($request->model)) || (!isset($request->driver_name)) )
		{
			$data = 'Registration Number, Driver Name, Model, VID is required';
			return json_encode($data);
		}
		if(!is_numeric($request->vid)){
			$data = 'Invalid VID Value';
			return json_encode($data);
		}
		if(!is_numeric($request->reg_no)){
			$data = 'Invalid Registration Number, Should be numeric value';
			return json_encode($data);
		}
		if(!is_numeric($request->km_reading)){
			$data = 'Invalid Km Reading, Should be numeric value';
			return json_encode($data);
		}
		
		DB::table('vehicles')->insert([
			'driver_name' => $request->driver_name,
			'reg_no' => $request->reg_no, 
			'vid' => $request->vid, 
			'km_reading' => $request->km_reading, 
			'model' => $request->model, 
			'status' => "Offline", 	

		]);

		$response = 'Successfully Added Material';
		return $response;
	}


	
	public function all_clients(){
		$data = DB::table('clients')->get();
		return json_encode($data);
	}
}