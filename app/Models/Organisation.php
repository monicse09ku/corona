<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    protected $fillable = ['name', 'status'];

    /**
     * Get the post that owns the comment.
     */
    public function org_admin()
    {
        return $this->belongsTO('App\Models\OrgAdmin', 'id', 'org_id');
    }
}
