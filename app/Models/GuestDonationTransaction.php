<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuestDonationTransaction extends Model
{
    const TRANSACTION_TYPE_PAYPAL=1;
    const TRANSACTION_TYPE_STRIPE=2;

    protected $fillable=[
        'name',
        'email',
        'transaction_id',
        'amount',
        'currency',
        'type'
    ];
}
