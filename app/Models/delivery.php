<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class delivery extends Model
{
    use HasFactory;

    protected $fillable = [
        'country',
        'fname',
        'lname',
        'address',
        'phone',
        'country_delivery',
        'fname_delivery',
        'lname_delivery',
        'address_delivery',
        'phone_delivery',
        'UUID',
        'delivery_type',
        'date',
        'worker_id',
        'price'
    ];

    protected $casts = [
        'date' => 'datetime',
    ];
}
