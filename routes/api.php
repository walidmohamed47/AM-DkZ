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

// Start User
Route::post('loginAPI','APIController@login');
Route::post('reportAPI','APIController@report');
Route::post('dashboardAPI','APIController@dashboard');
Route::post('transferAPI','APIController@transfer');
// End User

// Start TimeCloser
Route::post('loginTimeCloser','APIController@loginTimeCloser');
Route::get('loginTimeCloserGet'	,'APIController@loginTimeCloserGet');
Route::get('delays'			 ,'APIController@delays');
//End TimeCloser
