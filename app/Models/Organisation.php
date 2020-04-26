<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    protected $fillable = ['name', 'status', 'user_id'];

    /**
     * Get the post that owns the comment.
     */
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
}
