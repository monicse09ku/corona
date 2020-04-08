<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DonationArea extends Model
{
    protected $fillable = ['area_name', 'status', 'lat', 'long'];
}
