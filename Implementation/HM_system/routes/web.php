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
Route::get('/booking','BookingController@index');

Route::get('homeEdit/{id}','userController@edit');
Route::put('homeUpdate/{id}','userController@update');

Route::get('/test','HMS_Controller@test');
Route::get('admin/adminRoom','HMS_Controller@adminRoom');

Route::get('admin/adminRoom','RoomsController@index');

Route::put('admin/adminRoom','RoomsController@create');


Route::get('admin/adminRoom/{roomId}','RoomsController@edit')->name('room.edit');

Route::delete('admin/adminRoom/{roomId}','RoomsController@destroy')->name('room.delete');

Route::post('/roomType','RoomTypeController@index');
