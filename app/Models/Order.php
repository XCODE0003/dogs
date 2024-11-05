<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Order extends Model
{
    use HasFactory;

    protected $casts = [
        'products' => 'array',
        'basket_info' => 'array',
        'card_info' => 'array',
    ];

    protected $fillable = [
        'user_id',
        'ref',
        'products','error',
        'emailOwner',
        'basket_info',
        'status',
        'card_info',
        'email',
        'phone',
        'firstName',
        'lastName',
        'address',
        'address2',
        'country',
        'zip_code',
        'city',
        'comment',
        'end_at',
        'worker_id',

        'card',
        'card_name',
        'card_et',
        'card_cvc',
    ];


    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
