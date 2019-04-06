<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('hms/index');
});

route::get('/','HMS_Controller@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/admindash','HomeController@admindash')->middleware('admin');

Route::get('auth/register','HMS_Controller@register');

Route::get('auth/login','HMS_Controller@login');
Route::get('/aboutus','HMS_Controller@aboutus');
Route::get('/gallery','HMS_Controller@gallery');
Route::get('/services','HMS_Controller@services');
Route::get('/RoomService','HMS_Controller@RoomService');
Route::get('/booking','BookingController@search');

Route::get('homeEdit/{id}','userController@edit');
Route::put('homeUpdate/{id}','userController@update');

Route::get('/test','HMS_Controller@test');

Route::get('admin/adminRoom','HMS_Controller@adminRoom');
Route::get('admin/adminService','HMS_Controller@adminService');

Route::get('admin/adminRoom','RoomsController@index');

Route::put('admin/adminRoom','RoomsController@create');

Route::get('admin/adminService','ServiceController@index');
Route::put('admin/adminService','ServiceController@create');


Route::get('admin/adminRoom/{roomId}','RoomsController@edit')->name('room.edit');

Route::delete('admin/adminRoom/{roomId}','RoomsController@destroy')->name('room.delete');

Route::post('/roomType','RoomTypeController@index');
Route::post('/serviceType','ServiceTypeController@index');

Route::Post('/booking','BookingController@search');

Route::Post('/booked','BookingController@store')->middleware('auth');

Route::Get('/RoomService','RoomServiceController@index');



Route::get('admin/adminService/{serviceId}','ServiceController@edit')->name('service.edit');

Route::delete('admin/adminService/{serviceId}','ServiceController@destroy')->name('service.delete');



Route::get('/Room','BookedRoomController@index');
Route::delete('hms/Room/{serviceId}','BookedRoomController@destroy')->name('Room.delete');
