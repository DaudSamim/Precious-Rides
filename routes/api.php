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