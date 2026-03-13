<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'inv_date',
        'inv_no',
        'net_amount',
        'cgst',
        'sgst',
        'igst',
        'total_amount',
        'fullname',
        'mobile',
        'email',
        'gst_no',
        'city',
        'state',
    ];

    protected $casts = [
        'inv_date' => 'date',
        'net_amount' => 'decimal:2',
        'cgst' => 'decimal:2',
        'sgst' => 'decimal:2',
        'igst' => 'decimal:2',
        'total_amount' => 'decimal:2',
    ];

    protected $table = 'invoice';
}
