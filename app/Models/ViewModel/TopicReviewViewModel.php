<?php

namespace App\Models\ViewModel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Topic;

class TopicReviewViewModel extends Model
{
   protected $fillable = [
        'id_topic',
        'user_name',
        'name_category',
        'title',
        'content',
        'date',
    ];

    public function toTopicReviewViewModel(Topic $topic)
    {
        $viewModel = new TopicReviewViewModel();
        $viewModel->id_topic = $topic->id_topic;
        $viewModel->user_name = $topic->user->name;
        $viewModel->name_category = $topic->category;
        $viewModel->title = $topic->title;
        $viewModel->content = $topic->content;
        $viewModel->date = $topic->date;
        return $viewModel;
    }

}
