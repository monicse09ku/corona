<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable = ['donation_area_id', 'family_ids', 'org_id'];

    protected $casts = ['family_ids' => 'array'];

    /**
     * Get the post that owns the comment.
     */
    public function donation_area()
    {
        return $this->belongsTo('App\Models\DonationArea', 'donation_area_id');
    }

    /**
     * Get the post that owns the comment.
     */
    public function organisation()
    {
        return $this->hasOne('App\Models\Organisation', 'id', 'org_id');
    }
}
