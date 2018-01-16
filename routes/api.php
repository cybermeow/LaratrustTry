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

Route::group(['prefix' => 'alarm-list', 'middleware' => 'role:seom|admin'], function() {
    Route::get('/', 'AlarmListController@index');
    Route::delete('/{id_alarm}', ['middleware' => ['permission:d'], 'uses' => 'AlarmListController@destroy']);
});

Route::get('manhole', 'ManholeController@index');


//Route::get('manhole', 'ManholeController@index');
//Route::post('manhole', 'ManholeController@store');
//Route::put('manhole/{manhole}', 'ManholeController@update');
//Route::delete('manhole/{manhole}', 'ManholeController@delete');

//Route::get('alarm-list', 'AlarmListController@index');
//Route::get('alarm-list/{alarmList}', 'AlarmListController@show');
//Route::post('alarm-list', 'AlarmListController@store');
//Route::put('alarm-list/{alarmList}', 'AlarmListController@update');
//Route::delete('alarm-list/{id_alarm}', 'AlarmListController@delete');


//Route::put('ack-alarm/{alarmList}', 'AckAlarmController@update');
//
//
//Route::get('device', 'DeviceController@index');
//Route::get('device/{device}', 'DeviceController@show');
//Route::post('device', 'DeviceController@store');
//Route::put('device/{device}', 'DeviceController@update');
//Route::delete('device/{device}', 'DeviceController@delete');


//Route::put('user/{user}', 'UserColController@update');


Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');
