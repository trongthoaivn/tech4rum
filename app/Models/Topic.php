<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_topic
 * @property int $id_user
 * @property int $id_category
 * @property string $title
 * @property string $content
 * @property string $date
 * @property string $category
 * @property Category $category
 * @property User $user
 */
class Topic extends Model
{
    public $timestamps = false;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Topic';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_topic';

    /**
     * @var array
     */
    protected $fillable = ['id_user', 'id_category', 'title', 'content', 'date', 'category'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'id_category', 'id_category');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id_user', 'id_user');
    }
}
