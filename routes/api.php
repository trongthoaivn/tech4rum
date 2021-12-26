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
// Nguyen Thanh Phu

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

Route :: get('get-all-category-topic' , 'App\Http\Controllers\Api\CategoryTopicApiController@getAllCategoryTopic');

Route :: get('get-category-topic-by-id/{id}' , 'App\Http\Controllers\Api\CategoryTopicApiController@getCategoryTopicById');

Route :: put('update-category-topic/{id}' , 'App\Http\Controllers\Api\CategoryTopicApiController@updateCategoryTopic');

Route :: post('create-category-topic' , 'App\Http\Controllers\Api\CategoryTopicApiController@createCategoryTopic');

Route :: delete('delete-category-topic/{id}' , 'App\Http\Controllers\Api\CategoryTopicApiController@deleteCategoryTopic');

//Category

Route :: get('get-all-category' , 'App\Http\Controllers\Api\CategoryApiController@getAllCategory');

Route :: get('get-category-by-id/{id}' , 'App\Http\Controllers\Api\CategoryApiController@getCategoryById');

Route :: put('update-category/{id}' , 'App\Http\Controllers\Api\CategoryApiController@updateCategory');

Route :: post('create-category' , 'App\Http\Controllers\Api\CategoryApiController@createCategory');

Route :: delete('delete-category/{id}' , 'App\Http\Controllers\Api\CategoryApiController@deleteCategory');


//Topic

Route :: get('get-all-topic' , 'App\Http\Controllers\Api\TopicApiController@getAllTopic');

Route :: get('get-topic-by-id/{id}' , 'App\Http\Controllers\Api\TopicApiController@getTopicById');

Route :: get('get-topic-by-id-category/{id}' , 'App\Http\Controllers\Api\TopicApiController@getTopicByIdCategory');

Route :: get('get-topic-by-id-user/{id}' , 'App\Http\Controllers\Api\TopicApiController@getTopicByIdUser');

Route :: put('update-topic/{id}' , 'App\Http\Controllers\Api\TopicApiController@updateTopic');

Route :: post('create-topic' , 'App\Http\Controllers\Api\TopicApiController@createTopic');

Route ::delete( 'delete-topic/{id}' , 'App\Http\Controllers\Api\TopicApiController@deleteTopic');


