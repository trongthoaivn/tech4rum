<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ImageTopic;

class ImageTopicApiController extends Controller
{
    //
    public function getAllImageTopic()
    {
        if(ImageTopic :: all()->count() > 0)
        {
            return response()->json(ImageTopic :: all(), 200);
        }
        else
        {
            return response()->json('No data', 200);
        }
    }

    public function getImageTopicById($id)
    {
        if(ImageTopic :: find($id))
        {
            return response()->json(ImageTopic :: find($id), 200);
        }
        else
        {
            return response()->json('No data', 200);
        }
    }

    public function getImageTopicByIdTopic($id)
    {
        if(ImageTopic :: where('id_topic', $id)->count() > 0)
        {
            $imageTopic = ImageTopic :: where('id_topic', $id)->get();
            return response()->json($imageTopic, 200);
        }
        else
        {
            return response()->json('No data', 200);
        }
    }

    public  function createImageTopic(Request $request)
    {
        $data = $request->all();
        $imageTopic = new ImageTopic();
        $imageTopic->id_topic = $data['id_topic'];
        $imageTopic->image_topic = $data['image_topic'];
        if($imageTopic->save())
        {
            return response()->json('Create success', 200);
        }
        else
        {
            return response()->json('Create failed', 200);
        }
    }

    public function updateImageTopic(Request $request, $id)
    {
        $data = $request->all();
        if(ImageTopic :: find($id))
        {
            $imageTopic = ImageTopic :: find($id);
            $imageTopic->id_topic = $data['id_topic'];
            $imageTopic->image_topic = $data['image_topic'];
            $imageTopic->save();
            return response()->json('Update success', 200);
        }
        else
        {
            return response()->json('Update failed', 200);
        }
    }

    public function deleteImageTopic($id)
    {
        $imageTopic = ImageTopic :: find($id);
        if($imageTopic)
        {
            $imageTopic->delete();
            return response()->json('Delete success', 200);
        }
        else
        {
            return response()->json('No data', 200);
        }
    }
}
