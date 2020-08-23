<?php

use Illuminate\Support\Facades\Route;

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

//backend
Route::middleware('role:admin')->group(function(){

	Route::get('dashboard', 'BackendController@dashboard'
		)->name('dashboard');

	Route::resource('packages','PackageController');

	Route::resource('cars','CarController');


	Route::resource('hotels','HotelController');

	Route::resource('categories','CategoryController');


	Route::resource('books','BookingController');

	Route::get('profile','BackendController@profile')->name('profile');




});










// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
