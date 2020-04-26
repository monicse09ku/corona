<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    protected $fillable = ['name', 'phone', 'org_id'];

    /**
     * Get the post that owns the comment.
     */
    public function organisation()
    {
        return $this->hasOne('App\Models\Organisation', 'id', 'org_id');
    }
}
