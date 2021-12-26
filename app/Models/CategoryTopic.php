<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_category_topic
 * @property string $name_category_topic
 * @property Category[] $categories
 */
class CategoryTopic extends Model
{
    public $timestamps = false;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'category_topic';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_category_topic';

    /**
     * @var array
     */
    protected $fillable = ['name_category_topic'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function categories()
    {
        return $this->hasMany('App\Models\Category', 'id_category_topic', 'id_category_topic');
    }
}
