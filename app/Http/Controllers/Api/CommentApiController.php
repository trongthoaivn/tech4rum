<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentApiController extends Controller
{
    //
    public function getCommentByUserId($id_user){
        if(Comment::find($id_user)){
            return response()->json(Comment::find($id_user), 200);
        }
        else{
            return response('No data', 200);
        }
    }

    public function getCommentByTopicId($id_topic){
        if(Comment::find($id_topic)){
            return response()->json(Comment::find($id_topic), 200);
        }
        else{
            return response('No data', 200);
        }
    }

    public function EditComment($id_comment, Request $request){
        $data = $request->all();
        if(Comment::find($id_comment)){
            $comment = Comment::find($id_comment);
            $comment -> comment = $data['comment'];
            $comment -> save();
            return response() -> json ('Edit success', 200);
        }
        else{
            return response() -> json ('Edit failed', 200);
        }
    }

    public function NewComment(Request $request){
        $data = $request->all();
        $comment = new Comment();
        $comment -> comment = $data['comment'];
        if($comment -> save()){
            return response()->json('Success', 200);
        }
        else{
            return response()->json('Failed', 200);
        }
    }
}
