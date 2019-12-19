<?php

use Illuminate\Http\Request;
use App\User;

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

Route::get('user', 'UserController@index');

Route::get('user/{id}', function($id) {
    return User::find($id);
});
Route::get('user/{id}/profile', 'API\UserController@getProfile');

Route::post('auth/login', 'API\UserController@login');
Route::post('auth/register', 'API\UserController@register');
Route::post('cv/edit', 'API\CVInfoController@create');
Route::group(['middleware' => 'auth:api'], function(){
    Route::get('auth/details', 'API\UserController@details');
    Route::post('cv/create', 'API\CVController@create');
    Route::get('cv/details', 'API\CVController@details');
});
