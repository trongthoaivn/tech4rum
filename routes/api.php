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

//Admin

Route :: get('get-all-admin' , 'App\Http\Controllers\Api\AdminApiController@getAllAdmin');

Route :: get('get-admin-by-id/{id}' , 'App\Http\Controllers\Api\AdminApiController@getAdminById');

Route :: put('update-admin/{id}' , 'App\Http\Controllers\Api\AdminApiController@updateAdmin');

Route :: post('create-admin' , 'App\Http\Controllers\Api\AdminApiController@createAdmin');

Route :: delete('delete-admin/{id}' , 'App\Http\Controllers\Api\AdminApiController@deleteAdmin');

//User

Route :: get('get-all-user', 'App\Http\Controllers\Api\UserApiController@getAllUser');

//Category topic

