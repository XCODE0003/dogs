<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Http\Controllers\Controller;

use App\Models\Category;

class Review extends Model
{
    use HasFactory;
    protected $fillable = [
        'preview', 
        'description',
        'categorie_id',
    ];
    
    const PATH = "/temple/reviews/";

    protected function preview(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Controller::photoAccessor($value, self::PATH),
            // set: fn ($value) => $this->setPhotoAccessor($value),
        );
    }

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'categorie_id');
    }
}
