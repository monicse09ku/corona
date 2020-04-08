<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    protected $fillable = ['summary', 'medium', 'amount', 'vouchar'];
}
