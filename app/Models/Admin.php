<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_admin
 * @property string $username
 * @property string $password
 */
class Admin extends Model
{
    public $timestamps = false;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'admin';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_admin';

    /**
     * @var array
     */
    protected $fillable = ['username', 'password'];

}
