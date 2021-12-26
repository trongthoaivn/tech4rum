<?php

namespace App\Models\ViewModel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Topic;

class TopicReviewViewModel extends Model
{
    public $id_topic;
    public $user_name;
    public $name_category;
    public $title;
    public $content;
    public $date;

    public function __construct(Topic $topic)
    {
        $this->id_topic = $topic->id_topic;
        $this->user_name = $topic->user()->first()->username;
        $this->name_category = $topic->category()->first()->name_category;
        $this->title = $topic->title;
        $this->content = $topic->content;
        $this->date = $topic->date;
    }
}
