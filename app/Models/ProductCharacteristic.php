<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\ProdyctCharacteristicTitle;

class ProductCharacteristic extends Model
{
    use HasFactory;

    protected $fillable = [
        'text', 
        'title',
        'product_id',
        'prodyct_characteristic_title_id',
    ];

    public function title()
    {
        return $this->hasOne(ProdyctCharacteristicTitle::class, 'id', 'prodyct_characteristic_title_id');
    }
}
