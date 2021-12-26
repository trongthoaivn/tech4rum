<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Reply;
use Illuminate\Http\Request;

class ReplyApiController extends Controller
{
    //
    public function getReplyByUserId($id_user){
        if(Reply::find($id_user)){
            return response()->json(Reply::find($id_user), 200);
        }
        else{
            return response('No data', 200);
        }
    }

    public function getReplyByCommentId($id_comment){
        if(Reply::find($id_comment)){
            return response()->json(Reply::find($id_comment), 200);
        }
        else{
            return response('No data', 200);
        }
    }

    public function EditReply($id_reply, Request $request){
        $data = $request->all();
        if(Reply::find($id_reply)){
            $reply = Reply::find($id_reply);
            $reply -> reply = $data['reply'];
            $reply -> save();
            return response() -> json ('Edit success', 200);
        }
        else{
            return response() -> json ('Edit failed', 200);
        }
    }

    public function NewReply(Request $request){
        $data = $request->all();
        $reply = new Reply();
        $reply -> reply = $data['reply'];
        if($reply -> save()){
            return response()->json('Success', 200);
        }
        else{
            return response()->json('Failed', 200);
        }
    }
}
