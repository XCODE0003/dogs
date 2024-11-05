<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Casts\Attribute;

use App\Http\Controllers\Controller;
use App\Models\Product;

class Category extends Model
{
    use HasFactory, Sluggable;

    const PATH = "/temple/categories/";

    protected $fillable = [
        'title', 
        'slug', 
        'preview'
    ];

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
    
    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }
}
