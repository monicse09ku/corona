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
Route::get('test','HomeController@test');

Route::get('/make_donations', function () {
    return view('frontend.donation');
});

Route::get('/user-area', function () {
    return view('welcome');
});

//donation routs
Route::group(['prefix'=>'donation','namespace'=>'Frontend'],function(){
    Route::get('pay-with-paypal','MakeDonationController@payWithPaypal')->name('donation.paypal');
    Route::post('paypal-payment','MakeDonationController@PaypalPayment')->name('donation.paypal.payment');
    Route::get('paypal-payment-success','MakeDonationController@PaypalPaymentSuccess')->name('donation.paypal.payment.success');
    Route::get('paypal-payment-cancel','MakeDonationController@PaypalPaymentCancel')->name('donation.paypal.payment.cancel');

    // stripe payment
    Route::get('pay-with-stripe','MakeDonationController@payWithStripe')->name('donation.stripe');
    Route::post('stripe-payment','MakeDonationController@stripePayment')->name('donation.stripe.payment');

});


Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::group(['middleware' => 'auth'], function () {

	Route::get('/home', 'HomeController@index')->name('home')->middleware('auth.basic');
	Route::get('/donation-areas', 'Donation\DonationAreaController@index');
	Route::get('/donations', 'Donation\DonationController@index');
	Route::get('/families', 'Family\FamilyController@index');
	Route::get('/organisations', 'Organisation\OrganisationController@index');
	Route::get('/org-admins', 'Organisation\OrgAdminController@index');
	Route::get('/volunteers', 'Volunteer\VolunteerController@index');
	Route::get('/donors', 'Donor\DonorController@index');
	Route::get('/expenses', 'Expense\ExpenseController@index');
	Route::get('/users', 'UserController@index');
	Route::get('/profile', 'UserController@profile');

	Route::group([
        'middleware' => 'roles',
        'roles' => ['super_admin']
    ], function () {
        Route::get('/users', 'UserController@index');
    });

});
