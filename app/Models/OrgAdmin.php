<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrgAdmin extends Model
{
    protected $fillable = ['org_id', 'user_id'];

    /**
     * Get the post that owns the comment.
     */
    public function organisation()
    {
        return $this->hasOne('App\Models\Organisation', 'id', 'org_id');
    }

    /**
     * Get the post that owns the comment.
     */
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
}
