<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoryTopic;

class CategoryTopicApiController extends Controller
{

    public function getAllCategoryTopic()
    {
        if (CategoryTopic::all()->count() > 0) {
            return response()->json(CategoryTopic::all(), 200);
        } else {
            return response()->json('No data', 200);
        }
    }

    public function getCategoryTopicById($id)
    {
        if (CategoryTopic::find($id)) {
            return response()->json(CategoryTopic::find($id), 200);
        } else {
            return response()->json('No data', 200);
        }
    }

    public function updateCategoryTopic(Request $request, $id)
    {
        // get data from request body
        $data = $request->all();
        // update data
        if (CategoryTopic::find($id)) {
            $categoryTopic = CategoryTopic::find($id);
            $categoryTopic-> name_category_topic = $data['name_category_topic'];
            $categoryTopic->save();
            return response()->json('Update success', 200);
        } else {
            return response()->json('Update failed', 200);
        }
    }

    public function createCategoryTopic(Request $request)
    {
        // get data from request body
        $data = $request->all();
        // create new data
        $categoryTopic = new CategoryTopic();
        $categoryTopic->name_category_topic = $data['name_category_topic'];
        if ($categoryTopic->save()) {
            return response()->json('Create success', 200);
        } else {
            return response()->json('Create failed', 200);
        }
    }
    // Đang sửa
    // public function deleteCategoryTopic($id)
    // {
    //     if (CategoryTopic::find($id)) {
    //         CategoryTopic::destroy($id);
    //         return response()->json('Delete success', 200);
    //     } else {
    //         return response()->json('Delete failed', 200);
    //     }
    // }

}
