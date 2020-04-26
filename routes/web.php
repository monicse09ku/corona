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
    return view('frontend.homepage');
});

Route::get('/user-area', function () {
    return view('welcome');
});

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::group(['middleware' => 'auth'], function () {

	Route::get('/home', 'HomeController@index')->name('home')->middleware('auth.basic');
	Route::get('/donation-areas', 'Donation\DonationAreaController@index');
	Route::get('/donations', 'Donation\DonationController@index');
	Route::get('/families', 'Family\FamilyController@index');
	Route::get('/organisations', 'Organisation\OrganisationController@index');
	Route::get('/volunteers', 'Volunteer\VolunteerController@index');
	Route::get('/donors', 'Donor\DonorController@index');
	Route::get('/expenses', 'Expense\ExpenseController@index');
	Route::get('/users', 'UserController@index');
	Route::get('/profile', 'UserController@profile');

});