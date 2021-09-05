<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Create country route
Route::post('/country', 'App\Http\Controllers\CountryController@createCountryModel');

//Show country list
Route::get('/country', 'App\Http\Controllers\CountryController@getAllCountryModel');

// Show country by Id
Route::get('/country/{id}', 'App\Http\Controllers\CountryController@getCountryModelById');

// Update Country by Id
Route::put('/country/{id}','App\Http\Controllers\CountryController@updateCountryModelById');

// Delete Country By Id
Route::delete('/country/{id}','App\Http\Controllers\CountryController@deleteCountryModelById');