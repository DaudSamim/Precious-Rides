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

Route::post('sign_up', '\App\Http\Controllers\APIController@sign_up');
Route::post('enquiries', '\App\Http\Controllers\APIController@add_enquiries');
Route::post('driver-attendance', '\App\Http\Controllers\APIController@add_driver_attendance');
Route::post('driver-rating', '\App\Http\Controllers\APIController@add_driver_rating');
Route::post('add-owner', '\App\Http\Controllers\APIController@add_owner');
Route::post('add-trip', '\App\Http\Controllers\APIController@add_trip');
Route::post('add-promo', '\App\Http\Controllers\APIController@postaddpromocode');
Route::post('invite-friend', '\App\Http\Controllers\APIController@invitefriend');
Route::post('add-vehicle', '\App\Http\Controllers\APIController@add_vehicle');








Route::post('login','\App\Http\Controllers\APIController@login');