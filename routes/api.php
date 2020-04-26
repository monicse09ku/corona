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

Route::post('/login', 'Api\LoginController@login');
Route::post('/register', 'Api\LoginController@register');
Route::apiResource('donation-areas', 'Api\DonationAreaController')->middleware('auth:api');
Route::apiResource('donations', 'Api\DonationController')->middleware('auth:api');
Route::apiResource('families', 'Api\FamilyController')->middleware('auth:api');
Route::apiResource('organisations', 'Api\OrganisationController')->middleware('auth:api');
Route::apiResource('volunteers', 'Api\VolunteerController')->middleware('auth:api');
Route::apiResource('donors', 'Api\DonorController')->middleware('auth:api');
Route::apiResource('users', 'Api\UserController')->middleware('auth:api');
Route::apiResource('expenses', 'Api\ExpenseController')->middleware('auth:api');


Route::get('donation-area-families/{id}', 'Api\DonationController@donationAreaFamilies')->middleware('auth:api');

Route::get('profile', 'Api\TransactionController@user')->middleware('auth:api');
Route::post('profile', 'Api\TransactionController@userUpdate')->middleware('auth:api');