<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_category
 * @property int $id_category_topic
 * @property string $name_category
 * @property CategoryTopic $categoryTopic
 * @property Topic[] $topics
 */
class Category extends Model
{
    public $timestamps = false;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'category';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_category';

    /**
     * @var array
     */
    protected $fillable = ['id_category_topic', 'name_category'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categoryTopic()
    {
        return $this->belongsTo('App\Models\CategoryTopic', 'id_category_topic', 'id_category_topic');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function topics()
    {
        return $this->hasMany('App\Models\Topic', 'id_category', 'id_category');
    }
}
