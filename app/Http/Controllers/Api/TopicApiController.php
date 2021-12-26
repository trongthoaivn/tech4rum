<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Category;
use App\Models\CategoryTopic;
use App\Models\ImageTopic;
use App\Models\ViewModel\TopicReviewViewModel;
use App\Models\ViewModel\TopicViewModel;

class TopicApiController extends Controller
{
    public function getAllTopic()
    {
       if(Topic :: all()->count() > 0)
       {
           return response()->json(Topic :: all(), 200);
       }
       else
       {
           return response()->json('No data', 200);
       }
    }

    public  function getTopicById($id)
    {
        if(Topic :: find($id))
        {
            return response()->json(Topic :: find($id), 200);
        }
        else
        {
            return response()->json('No data', 200);
        }
    }
    public function getTopicByIdCategory($id)
    {
        if(Topic :: where('id_category', $id)->count() > 0)
        {
            $topic = Topic :: where('id_category', $id)->get();
            // $viewdata = array();
            // foreach ($topic as $item)
            // {
            //     array_push($viewdata, new TopicReviewViewModel($item));
            // }
            return response()->json($topic, 200);
        }
        else
        {
            return response()->json('No data', 200);
        }
    }

    public function getTopicByIdUser($id)
    {
        if(Topic :: where('id_user', $id)->count() > 0)
        {
            return response()->json(Topic :: where('id_user', $id)->get(), 200);
        }
        else
        {
            return response()->json('No data', 200);
        }
    }

    public function updateTopic($id, Request $request)
    {
        // get data from request body
        $data = $request->all();
        // update data
        if(Topic :: find($id))
        {
            $topic = Topic :: find($id);
            $topic->id_category = $data['id_category'];
            $topic->id_user = $data['id_user'];
            $topic->title = $data['title'];
            $topic->content = $data['content'];
            $topic->category = $data['category'];
            $topic->date = date('Y-m-d');
            $topic->save();
            return response()->json('Update success', 200);
        }
        else
        {
            return response()->json('Update failed', 200);
        }
    }

    public function createTopic(Request $request)
    {
        // get data from request body
        $data = $request->all();
        // create new data
        $topic = new Topic();
        $topic->id_category = $data['id_category'];
        $topic->id_user = $data['id_user'];
        $topic->title = $data['title'];
        $topic->content = $data['content'];
        $topic->category = $data['category'];
        $topic->date = date('Y-m-d');
        if($topic->save())
        {
            return response()->json('Create success', 200);
        }
        else
        {
            return response()->json('Create failed', 200);
        }
    }

    public function deleteTopic($id)
    {
        if(Topic :: find($id))
        {
            Topic :: destroy($id);
            return response()->json('Delete success', 200);
        }
        else
        {
            return response()->json('Delete failed', 200);
        }
    }
}
