<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// Client
Route::post('sign_up', '\App\Http\Controllers\APIController@sign_up');
Route::post('login','\App\Http\Controllers\APIController@login');
Route::post('profile_update','\App\Http\Controllers\APIController@profile_update');

// location 
Route::post('get_location','\App\Http\Controllers\APIController@get_location');
Route::post('dropoff_location','\App\Http\Controllers\APIController@dropoff_location');
Route::post('pickup_location','\App\Http\Controllers\APIController@pickup_location');

// Vehicles
Route::post('get_available_vehicles','\App\Http\Controllers\APIController@get_available_vehicles');
Route::post('choose_vehicle','\App\Http\Controllers\APIController@choose_vehiclse');
Route::post('select_driver','\App\Http\Controllers\APIController@select_driver');
Route::post('booking_confirmation','\App\Http\Controllers\APIController@booking_confirmation');
Route::post('booking_history','\App\Http\Controllers\APIController@booking_history');