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

Route :: get('get-user-by-id/{id}' , 'App\Http\Controllers\Api\UserApiController@getUserById');

Route :: put('update-user/{id}' , 'App\Http\Controllers\Api\UserApiController@updateUser');

Route :: post('create-user' , 'App\Http\Controllers\Api\UserApiController@createUser');

//Category topic


//Reply

Route :: get('get-reply-by-userid/{id}' , 'App\Http\Controllers\Api\ReplyApiController@getReplyByUserId');

Route :: get('get-reply-by-commentid/{id}' , 'App\Http\Controllers\Api\ReplyApiController@getReplyByCommentId');

Route :: put('edit-reply/{id}' , 'App\Http\Controllers\Api\ReplyApiController@EditReply');

Route :: post('new-reply' , 'App\Http\Controllers\Api\ReplyApiController@NewReply');

//Comment

Route :: get('get-comment-by-userid/{id}' , 'App\Http\Controllers\Api\CommentApiController@getCommentByUserId');

Route :: get('get-comment-by-topicid/{id}' , 'App\Http\Controllers\Api\CommentApiController@getCommentByTopicId');

Route :: put('edit-comment/{id}' , 'App\Http\Controllers\Api\CommentApiController@EditComment');

Route :: post('new-comment' , 'App\Http\Controllers\Api\CommentApiController@NewComment');
