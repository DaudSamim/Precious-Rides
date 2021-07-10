<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Twilio\Rest\Client;

class APIController extends Controller
{
	protected $TWILIO_SID='AC2593330273586414db804535cd733cbc';
	protected $TWILIO_AUTH_TOKEN="18e274a2edaea75dccca8b7bd2cf960d";
	protected $TWILIO_NUMBER="+19142686859";

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
			$status = 400;
			$message = 'Email Format is not okay';
			$data = null;
			$response->status = $status;
			$response->message = $message;
			$response->data = $data;
			return json_encode($response);
		}

		if(!is_numeric($request->number) || strlen($request->number) != 13){
			$status = 400;
			$message = 'Number Format is not okay';
			$data = null;
			$response->status = $status;
			$response->message = $message;
			$response->data = $data;
			return json_encode($response);
		}

		if(DB::table('clients')->where('email',$request->email)->first()){
			$data = 'Email already registered';
			return json_encode($data);
		}

		$code = $this->getRandomAuthCode();
		$this->sendMessage($request->number, $this->getClientAuthMessage($code));


		DB::table('clients')->insert([
			'email' => $request->email,
			'number' => $request->number,
			'verification_code' => $code,
			'verified' => false
		]);

		$status = 200;
		$message = 'Client Successfully Stored';
		$data = DB::table('clients')->orderBy('id','desc')->first();
		$response->status = $status;
		$response->message = $message;
		$response->data = $data;

		return json_encode($response);
	}

	public function verifyOPT(Request $request){
		$response = (object) null;
		if(!isset($request->opt) || !isset($request->clientId)){
			$status = 400;
			$message = 'OPT and client id are required';
			$data = null;
			$response->status = $status;
			$response->message = $message;
			$response->data = $data;
			return json_encode($response);
		}
		$client = DB::table('clients')->find($request->clientId);
		if(!$client){
			$status = 400;
			$message = 'Client does not exist against this id';
			$data = null;
			$response->status = $status;
			$response->message = $message;
			$response->data = $data;
			return json_encode($response);
		}
		if($client->verification_code == $request->opt){
			DB::table('clients')->where('id',$request->clientId)->update([
				'verified'=>'true'
			]);
			$response->status = 200;
			$response->message = 'Client Verified';
			$response->data = true;
			return json_encode($response);
		}
		else{
			$response->status = 200;
			$response->message = 'OPT does not match';
			$response->data = false;
			return json_encode($response);
		}
	}
	public function login(Request $request){
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

	protected function sendMessage($recipientsPhoneNumber, $message){
		$client = new Client($this->TWILIO_SID, $this->TWILIO_AUTH_TOKEN);
		$client->messages->create($recipientsPhoneNumber,
            ['from' => $this->TWILIO_NUMBER, 'body' => $message] );
	}

	protected function getRandomAuthCode(){
		$digits = 4;
		return rand(pow(10, $digits-1), pow(10, $digits)-1);
	}

	protected function getClientAuthMessage($number){
		return "Here is your 4 digit verification code " . strval($number);
	}

	public function dropoff_location(Request $request){

	}

	public function pickup_location(Request $request){

	}

	public function get_available_vehicles(Request $request){

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

	public function calculateFare(Request $request){
		$response = (object) null;
		if(!isset($request->start_lat) ||
		!isset($request->start_long) ||
		!isset($request->end_lat) ||
		!isset($request->end_long) ||
		!isset($request->vehicle_type)){
			$response->status = 400;
			$response->message = 'starting and ending lat, long with vehicle type is required ';
			$response->data = null;
			return json_encode($response);
		}
		$vehicleType = DB::table('vehicle_type_fares')->where('name',$request->vehicle_type)->first();
		if(!$vehicleType){
			$response->status = 400;
			$response->message = 'vehicle type does not exist ';
			$response->data = null;
			return json_encode($response);
		}
		$distance = $this->distance($request->start_lat, $request->start_long, $request->end_lat, $request->end_long, 'K');
		return $vehicleType->fare_rate * $distance;
	}

	protected function distance($lat1, $lon1, $lat2, $lon2, $unit) {
		if (($lat1 == $lat2) && ($lon1 == $lon2)) {
		  return 0;
		}
		else {
		  $theta = $lon1 - $lon2;
		  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
		  $dist = acos($dist);
		  $dist = rad2deg($dist);
		  $miles = $dist * 60 * 1.1515;
		  $unit = strtoupper($unit);

		  if ($unit == "K") {
			return round($miles * 1.609344);
		  } else if ($unit == "N") {
			return round($miles * 0.8684);
		  } else {
			return round($miles);
		  }
		}
	}

	public function booking_history(Request $request){

	}
}


