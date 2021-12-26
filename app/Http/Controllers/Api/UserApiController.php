<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserApiController extends Controller
{
    //
    public function getAllUser(){
        if(User::all()->count() >0){
            return response()->json(User::all(), 200);
        }
        else{
            return response()-> json('No data', 200);
        }
    }

    public function getUserById($id_user){
        if(User::find($id_user)){
            return response()->json(User::find($id_user), 200);
        }
        else{
            return response('No data', 200);
        }
    }

    public function updateUser($id_user, Request $request){
        $data = $request->all();
        if(User::find($id_user)){
            $user = User::find($id_user);
            $user -> username = $data['username'];
            $user -> password = $data['password'];
            $user -> email = $data['email'];
            $user -> phone = $data['phone'];
            $user -> score = $data['score'];
            $user -> save();
            return response()-> json('Update success', 200);
        }else{
            return response()-> json('Update failed', 200);
        }
    }

    public function createUser(Request $request){
        $data = $request->all();
        $user = new User();
        $user -> username = $data['username'];
        $user -> password = $data['password'];
        $user -> email = $data['email'];
        $user -> phone = $data['phone'];
        $user -> score = $data['score'];
        if($user -> save()){
            return response()-> json('Create success', 200);
        }else{
            return response()-> json('Create failed', 200);
        }
    }

}
