<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Http\Controllers\Controller;

class ProductPhoto extends Model
{
    use HasFactory;

    protected $fillable = [
        'path', 
        'product_id',
    ];

    const PATH = "/temple/products/photos/";

    protected function path(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Controller::photoAccessor($value, self::PATH),
            // set: fn ($value) => $this->setPhotoAccessor($value),
        );
    }

}
