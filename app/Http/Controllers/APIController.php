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

		if(isset($_GET['id']))
		{
		   $id = $_GET['id'] ;
		};


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

	public function get_location(Request $request){
		$response = (object) null;
		if(!isset($request->location)){
			$response->status = 400;
			$response->message = 'Location is required';
			$response->data = null;
			return json_encode($response);
		}

		else{
			$address = $request->location; // Address
		        $apiKey = 'AIzaSyAd8q-fqcHslANRJ3WZxR5cMYY1CgtBe9I'; // Google maps now requires an API key.
		        // Get JSON results from this request
		       
		        $geo = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.urlencode($address).'&sensor=false&key='.$apiKey);
		       
		        $geo = json_decode($geo, true); // Convert the JSON to an array
		        if (isset($geo['status']) && ($geo['status'] == 'OK')) {
		          $latitude = $geo['results'][0]['geometry']['location']['lat']; // Latitude
		          $longitude = $geo['results'][0]['geometry']['location']['lng']; // Longitude
		          
		          $data = array('location'=> $request->location,'latitude' => $latitude,'longitude' => $longitude);
		          	$response->status = 200;
					$response->message = 'Success';
					$response->data = $data;
					return json_encode($response);
		        }
		       return 'Location not Valid';
		    }
	}

	public function dropoff_location(Request $request){

	}

	public function pickup_location(Request $request){

	}

	public function get_available_vehicles(Request $request){

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
	public function choose_vehicle(Request $request){
		$response = (object) null;
		if(!isset($request->vehicle_id)){
			$response->status = 400;
			$response->message = 'Vehicle Id is required';
			$response->data = null;
			return json_encode($response);
		}

		else{
			// send drivers list
		}
	}

	public function select_driver(Request $request){
		$response = (object) null;
		if(!isset($request->driver_id)){
			$response->status = 400;
			$response->message = 'Driver Id is required';
			$response->data = null;
			return json_encode($response);
		}

		else{
			// send fare rates
		}
	}

	public function booking_confirmation(Request $request){
		$response = (object) null;
		if(!isset($request->driver_id)){
			$response->status = 400;
			$response->message = 'Driver Id is required';
			$response->data = null;
			return json_encode($response);
		}

		else{
			// send fare rates
		}
	}

	public function booking_history(Request $request){

	}
}