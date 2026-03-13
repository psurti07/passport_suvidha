<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationOrder extends Model
{
    use HasFactory;

    protected $table = 'application_order';
    
    protected $fillable = [
        'customer_id',
        'registration_date',
        'expiry_date',
        'card_number',
        'amount',
        'paymentid'
    ];
}
