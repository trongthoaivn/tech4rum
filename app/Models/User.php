<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_user
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $phone
 * @property int $score
 * @property Comment[] $comments
 * @property Reply[] $replies
 * @property Topic[] $topics
 */
class User extends Model
{
    public $timestamps = false;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_user';

    /**
     * @var array
     */
    protected $fillable = ['username', 'password', 'email', 'phone', 'score'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany('App\Models\Comment', 'id_user', 'id_user');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function replies()
    {
        return $this->hasMany('App\Models\Reply', 'id_user', 'id_user');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function topics()
    {
        return $this->hasMany('App\Models\Topic', 'id_user', 'id_user');
    }
}
