<?php

namespace App\Http\Controllers;

use App\Attendence;
use App\ClientNotification;
use App\ClientWallet;
use App\Driver;
use App\DriverNotification;
use App\DriverWallet;
use App\RideRequest;
use App\Trip;
use Illuminate\Http\Request;
use DB;
use Throwable;
use Twilio\Rest\Client;

class APIController extends Controller
{
	protected $TWILIO_SID='AC2593330273586414db804535cd733cbc';
	protected $TWILIO_AUTH_TOKEN="46d93dc3fcaba4efffa12c09d0705f74";
	protected $TWILIO_NUMBER="+19142686859";

	public function sign_up(Request $request){
		$response = (object) null;
		if(!isset($request->email) || !isset($request->number)){
			$data = 'Email and Contact Number is required';
			return json_encode($data);
		}

		if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
		  	$data = 'Email Format is not okay';
			return json_encode($data);
		}

		if(!is_numeric($request->number) || strlen($request->number) != 13){
			$status = 400;
			$message = 'Number Format is not okay';
			$response->status = $status;
			$response->message = $message;
			return json_encode($response);
		}

		if(DB::table('clients')->where('email',$request->email)->first()){
			$data = 'Email already registered';
			return json_encode($data);
		}

		$code = $this->getRandomAuthCode();

        try {
		    $this->sendMessage($request->number, $this->getClientAuthMessage($code));
        } catch (Throwable $exception) {
            $response->status = "Exception occoured in sending message, please verify twilio auth code and verify number";
            $response->message = $exception;
			return json_encode($response);
        }


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

	public function getBookingHistory(Request $request){
        $response = (object) null;
		if(!isset($request->clinetId)){
			$response->status = 400;
			$response->message = 'Client Id is required';
			$response->data = null;
			return json_encode($response);
		}
        $response->data = DB::table('trips')->where('customer_id',$request->clientId);
        $response->status = 200;
        return json_encode($response);;
    }

    public function getDriverStatus(Request $request){
        $response = (Object) null;
        if(!isset($request->driverName)){
			$response->status = 400;
			$response->message = 'Driver Name is required';
			$response->data = null;
			return json_encode($response);
		}
        $driverAttendence = Attendence::where('driver_name',$request->driverName)->first();
        $response->data = $driverAttendence->status;
        $response->status = 200;
        return json_encode($response);;
    }

    public function updateDriverStatus(Request $request){
        $response = (Object) null;
        if(!isset($request->driverName) ||
        !isset($request->status)){
			$response->status = 400;
			$response->message = 'Driver Name and status is required';
			$response->data = null;
			return json_encode($response);
		}
        $driverAttendence = Attendence::where('driver_name',$request->driverName)->first();
        $driverAttendence->status = $request->status;
        $driverAttendence->save();
        $response->message = 'Driver status updated';
        $response->status = 200;
        return json_encode($response);;
    }

    public function availableVehicles(Request $request){
        $response = (Object) null;
        $availableVehicles = DB::table('attendance')->where('status','online')->get(['vid']);
        $response->data = $availableVehicles;
        $response->status = 200;
        return json_encode($response);;
    }

    public function getDriverRideRequests(Request $request){
        $response = (Object) null;
        $requests = DB::table('ride_request')->get();
        $response->data = $requests;
        $response->status = 200;
        return json_encode($response);;
    }

    public function addRideRequest(Request $request){
        $response = (Object) null;
        if(!isset($request->clientId) ||
        !isset($request->start_lat) ||
        !isset($request->start_long) ||
        !isset($request->end_lat) ||
        !isset($request->end_long)){
			$response->status = 400;
			$response->message = 'Client Id, start and end lat long are required';
			$response->data = null;
			return json_encode($response);
		}
        $status = "REQUESTED";
		DB::table('ride_request')->insert([
			'start_lat' => $request->start_lat,
			'start_long' => $request->start_long,
			'end_lat' => $request->end_lat,
			'end_long' => $request->end_long,
			'status' => $status,
			'client_id' => $request->clientId
		]);

		$ride_request = DB::table('ride_request')->orderBy('id','desc')->first();

        $response->message = "Ride requested";
        $response->data = $ride_request;
        $response->status = 200;
        return json_encode($response);;
    }

    public function confirmRideRequest(Request $request){
        $response = (Object) null;
        if(!isset($request->rideId) ||
           !isset($request->driverId)){
			$response->status = 400;
			$response->message = 'Ride id and driver Id is required';
			$response->data = null;
			return json_encode($response);
		}
        $ride_request = RideRequest::find($request->rideId);
        $ride_request->driver_id = $request->driverId;
        $ride_request->save();
        $driver = Driver::find($request->driverId);
        echo('av');
        $trip = Trip::insert([
            'mobile' => $driver->mobile_number ,
            'from_location' => $ride_request->start_lat . ',' . $ride_request->start_long,
            'to_location' => $ride_request->end_lat . ',' . $ride_request->end_long,
            'pickup_time' => time(),
            'status' => 'CONFIRMED',
            'client_id' => $ride_request->client_id,
            'driver_id' => $request->driverId,
        ]);

        $response->message = "ride is confirmed by the driver";
        $response->data = $trip;
        $response->status = 200;
        return json_encode($response);;
    }

    public function getDriverRidesConfirmed(Request $request){
        $response = (Object) null;
        if(!isset($request->driverId)){
			$response->status = 400;
			$response->message = 'Driver Id is required';
			$response->data = null;
			return json_encode($response);
		}
        $requests = DB::table('ride_request')->where('driver_id', $request->driverId);
        $response->data = $requests;
        $response->status = 200;
        return json_encode($response);;
    }

    public function clientNotifications(Request $request){
        $response = (Object) null;
        if(!isset($request->clientId)){
			$response->status = 400;
			$response->message = 'Client Id is required';
			$response->data = null;
			return json_encode($response);
		}
        $notifications = ClientNotification::where('client_id', $request->clientId)->get();
        $response->data = $notifications;
        $response->status = 200;
        return json_encode($response);;
    }

    public function sendClientNotification(Request $request){
        $response = (Object) null;
        if(!isset($request->clientId) ||
        !isset($request->notificationType) ||
        !isset($request->notificationTitle) ||
        !isset($request->notificationBody)){
			$response->status = 400;
			$response->message = 'Client Id, notification type, notification title, notification body is required';
			$response->data = null;
			return json_encode($response);
		}

        $notification = new ClientNotification;
        $notification->notification_type = $request->notificationType;
        $notification->notification_title = $request->notificationTitle;
        $notification->notification_body = $request->notificationBody;
        $notification->client_id = $request->clientId;
        $notification->save();

        $response->message = "notification sent successfully";
        $response->status = 200;
        return json_encode($response);;
    }

    public function driverNotifications(Request $request){
        $response = (Object) null;
        if(!isset($request->driverId)){
			$response->status = 400;
			$response->message = 'Driver Id is required';
			$response->data = null;
			return json_encode($response);
		}
        $notifications = DB::table('driver_notification')->where('driver_id', $request->driverId);
        $response->data = $notifications;
        $response->status = 200;
        return json_encode($response);;
    }

    public function sendDriverNotification(Request $request){
        $response = (Object) null;
        if(!isset($request->DriverId) ||
        !isset($request->notificationType) ||
        !isset($request->notificationTitle) ||
        !isset($request->notificationBody)){
			$response->status = 400;
			$response->message = 'Driver Id, notification type, notification title, notification body is required';
			$response->data = null;
			return json_encode($response);
		}

        $notification = new DriverNotification;
        $notification->notification_type = $request->notificationType;
        $notification->notification_title = $request->notificationTitle;
        $notification->notification_body = $request->notificationBody;
        $notification->driver_id = $request->driverId;
        $notification->save();

        $response->data = $notification;
        $response->message = "notification sent successfully";
        $response->status = 200;
        return json_encode($response);;
    }

    public function clientTips(Request $request){
        $response = (Object) null;
        if(!isset($request->clientId)){
			$response->status = 400;
			$response->message = 'Client Id is required';
			$response->data = null;
			return json_encode($response);
		}
        $tips = DB::table('trips')->where('client_id', $request->clientId)->get(['tip']);
        $response->data = $tips;
        $response->status = 200;
        return json_encode($response);;
    }

    public function completeRide(Request $request){
        $response = (Object) null;
        if(!isset($request->tripId) ||
        !isset($request->price) ||
        !isset($request->timeTaken) ||
        !isset($request->distance) ||
        !isset($request->tip)){
			$response->status = 400;
			$response->message = 'Trip id,price, time Taken (mins), distance (KM) and tip is required';
			$response->data = null;
			return json_encode($response);
		}
        $trip = Trip::find($request->tripId);
        $trip->price = $request->price;
        $trip->time_taken_minutes = $request->timeTaken;
        $trip->distance_km = $request->distance;
        $trip->tip = $request->tip;
        $trip->save();
        $response->message = 'ride is completed';
        $response->data = $trip;
        $response->status = 200;
        return json_encode($response);;
    }

    public function paymentTypes(Request $request){
        $response = (Object) null;
        $paymentTypes = DB::table('payment_type')->get();
        $response->data = $paymentTypes;
        $response->status = 200;
        return json_encode($response);;
    }

    public function addPaymentType(Request $request){
        $response = (Object) null;
        if(!isset($request->paymentType)){
			$response->status = 400;
			$response->message = 'Payment type is required';
			$response->data = null;
			return json_encode($response);
		}
        DB::table('payment_type')->insert([
            'paymentType' => $request->paymentType
        ]);
		$paymentType = DB::table('payment_type')->orderBy('id','desc')->first();
        $response->data = $paymentType;
        $response->message = "Payment type added successfully";
        $response->status = 200;
        return json_encode($response);;
    }

    public function driverRideHistory(Request $request){
        $response = (Object) null;
        if(!isset($request->driverId)){
			$response->status = 400;
			$response->message = 'Driver Id is required';
			$response->data = null;
			return json_encode($response);
		}
        $tripsHistory = DB::table('trips')->where('driver_id', $request->driverId)->get();
        $response->data = $tripsHistory;
        $response->status = 200;
        return json_encode($response);;
    }

    public function driverProfileData(Request $request){
        $response = (Object) null;
        if(!isset($request->driverId)){
			$response->status = 400;
			$response->message = 'Driver Id is required';
			$response->data = null;
			return json_encode($response);
		}

        $driver = DB::table('drivers')->find($request->driverId);
        $totalKms = DB::table('trips')->where('driver_id', $request->driverId)->sum('distance_km');
        $totalTimeMinutes = DB::table('trips')->where('driver_id', $request->driverId)->sum('time_taken_minutes');
        $totalRides = DB::table('trips')->where('driver_id', $request->driverId)->get()->count();
        $response->data = (Object) null;
        $response->data->driver = $driver;
        $response->data->totalKms = $totalKms;
        $response->data->totalTimeMinutes = $totalTimeMinutes;
        $response->data->totalRides = $totalRides;
        $response->status = 200;
        return json_encode($response);;
    }

    public function driverVehicleList(Request $request){
        $response = (Object) null;
        if(!isset($request->driverId)){
			$response->status = 400;
			$response->message = 'Driver Id is required';
			$response->data = null;
			return json_encode($response);
		}
        $vehicles = DB::table('driver_vehicles')->where('driver_id', $request->driverId)->get();
        $response->data = $vehicles;
        $response->status = 200;
        return json_encode($response);;
    }

    public function addDriverVehicle(Request $request){
        $response = (Object) null;
        if(!isset($request->driverId) ||
        !isset($request->vehicle) ||
        !isset($request->vehicleTypeId)){
			$response->status = 400;
			$response->message = 'Driver Id, vehicle and vehicle type id is required';
			$response->data = null;
			return json_encode($response);
		}

        DB::table('driver_vehicles')->insert([
			'driver_id' => $request->driverId,
			'vehicle' => $request->vehicle,
			'vehicle_type_id' => $request->vehicleTypeId
		]);

		$vehicle = DB::table('driver_vehicles')->orderBy('id','desc')->first();
        $response->data = $vehicle;
        $response->message = 'vehicle added successfully';
        $response->status = 200;
        return json_encode($response);;
    }

    public function driverDocuments(Request $request){
        $response = (Object) null;
        if(!isset($request->driverId)){
			$response->status = 400;
			$response->message = 'Driver Id is required';
			$response->data = null;
			return json_encode($response);
		}
        $documents = DB::table('drivers')->where('id', $request->driverId)->get(['licence_url','identity_card_url']);
        $response->data = $documents;
        $response->status = 200;
        return json_encode($response);;
    }

    public function addDriverDocuments(Request $request){
        $response = (Object) null;
        if(!isset($request->driverId) ||
        !isset($request->licenceUrl) ||
        !isset($request->IdCardUrl)){
			$response->status = 400;
			$response->message = 'Driver Id, licence URL and Id Card Url is required';
			$response->data = null;
			return json_encode($response);
		}

        DB::table('drivers')->where('id',$request->driverId)->update([
            'licence_url'=> $request->licenceUrl,
            'identity_card_url' => $request->IdCardUrl
        ]);

        $documents = DB::table('drivers')->where('id', $request->driverId)->get(['licence_url','identity_card_url']);
        $response->data = $documents;
        $response->message = "Driver documents added";
        $response->status = 200;
        return json_encode($response);;
    }

    public function getMessages(Request $request){
        $response = (Object) null;
        if(!isset($request->driverId) ||
            !isset($request->clientId)){
			$response->status = 400;
			$response->message = 'Driver and Client Ids are required';
			$response->data = null;
			return json_encode($response);
		}
        $messages = DB::table('messages')->where('client_id', $request->clientId)->where('driver_id',$request->driverId)
            ->get();
        $response->data = $messages;
        $response->status = 200;
        return json_encode($response);;
    }

    public function sendMessages(Request $request){
        $response = (Object) null;
        if(!isset($request->driverId) ||
            !isset($request->clientId) ||
            !isset($request->sender) ||
            !isset($request->message)){
			$response->status = 400;
			$response->message = 'Driver Id, ClientId, message and sender(client/driver) are required';
			$response->data = null;
			return json_encode($response);
		}

		DB::table('messages')->insert([
			'message_body' => $request->message,
			'client_id' => $request->clientId,
			'driver_id' => $request->driverId,
			'sender' => $request->sender
		]);

		$message = DB::table('messages')->orderBy('id','desc')->first();

        $response->data = $message;
        $response->message = "message sent successfully";
        $response->status = 200;
        return json_encode($response);;
    }

    public function getClientWallet(Request $request){
        $response = (Object) null;
        if(!isset($request->clientId)){
			$response->status = 400;
			$response->message = 'ClientId is required';
			$response->data = null;
			return json_encode($response);
		}

        $wallet = ClientWallet::where('client_id',$request->clientId)->get();

        $response->data = $wallet;
        $response->status = 200;
        return json_encode($response);;
    }

    public function getDriverWallet(Request $request){
        $response = (Object) null;
        if(!isset($request->driverId)){
			$response->status = 400;
			$response->message = 'Driver Id is required';
			$response->data = null;
			return json_encode($response);
		}

        $wallet = DriverWallet::where('driver_id',$request->driverId)->get();

        $response->data = $wallet;
        $response->status = 200;
        return json_encode($response);;
    }

}



