<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_reply
 * @property int $id_comment
 * @property int $id_user
 * @property string $reply
 * @property Comment $comment
 * @property User $user
 */
class Reply extends Model
{
    public $timestamps = false;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'reply';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_reply';

    /**
     * @var array
     */
    protected $fillable = ['id_comment', 'id_user', 'reply','date'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function comment()
    {
        return $this->belongsTo('App\Models\Comment', 'id_comment', 'id_comment');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id_user', 'id_user');
    }
}
