<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    protected $fillable = ['name', 'phone', 'occupation', 'donation_area_id','type', 'total_member', 'elderly','adult', 'children', 'medications', 'details', 'contact_history', 'created_by'];

    /**
     * Get the post that owns the comment.
     */
    public function donation_area()
    {
        return $this->belongsTo('App\Models\DonationArea', 'donation_area_id');
    }
}
