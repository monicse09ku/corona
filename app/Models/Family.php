<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    protected $fillable = ['name', 'phone', 'donation_area_id','type', 'total_member', 'elderly','adult', 'children', 'smoker','respiratory', 'diabetes', 'heart', 'details', 'contact_history'];

    /**
     * Get the post that owns the comment.
     */
    public function donation_area()
    {
        return $this->belongsTo('App\Models\DonationArea', 'donation_area_id');
    }
}
