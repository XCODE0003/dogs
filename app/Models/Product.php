<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Casts\Attribute;

use App\Http\Controllers\Controller;

use App\Models\ProductPhoto;
use App\Models\ProductCharacteristic;
use App\Models\Category;

class Product extends Model
{
    use HasFactory, Sluggable;

    const PATH = "/temple/products/preview/";

    protected $fillable = [
        'title', 
        'slug', 
        'preview', 
        'short_description', 
        'description',
        'price',
        'discount',
        'status',
        'category_id',
    ];

    public function photos()
    {
        return $this->hasMany(ProductPhoto::class, 'product_id', 'id');
    }

    public function characteristics()
    {
        return $this->hasMany(ProductCharacteristic::class, 'product_id', 'id');
    }

    public function characteristic()
    {
        return $this->hasOne(ProductCharacteristic::class, 'product_id', 'id');
    }

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
    
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    protected function preview(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Controller::photoAccessor($value, self::PATH),
            // set: fn ($value) => $this->setPhotoAccessor($value),
        );
    }
}
