<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    protected $fillable = ['summary', 'medium', 'amount', 'account', 'vouchar', 'org_id'];
    
    /**
     * Get the post that owns the comment.
     */
    public function organisation()
    {
        return $this->hasOne('App\Models\Organisation', 'id', 'org_id');
    }
}
