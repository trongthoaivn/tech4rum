<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_comment
 * @property int $id_topic
 * @property int $id_user
 * @property string $comment
 * @property Topic $topic
 * @property User $user
 * @property Reply[] $replies
 */
class Comment extends Model
{
    public $timestamps = false;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'comment';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_comment';

    /**
     * @var array
     */
    protected $fillable = ['id_topic', 'id_user', 'comment'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function topic()
    {
        return $this->belongsTo('App\Topic', 'id_topic', 'id_topic');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'id_user', 'id_user');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function replies()
    {
        return $this->hasMany('App\Reply', 'id_comment', 'id_comment');
    }
}
