<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_image
 * @property int $id_topic
 * @property string $name_image
 * @property Topic $topic
 */
class ImageTopic extends Model
{
    public $timestamps = false;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'image_topic';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_image';

    /**
     * @var array
     */
    protected $fillable = ['id_topic', 'name_image'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function topic()
    {
        return $this->belongsTo('App\Models\Topic', 'id_topic', 'id_topic');
    }
}
