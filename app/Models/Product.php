<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'slug',
        'price',
        'image_thumb_url',
        'category_id',
        'description',
        'recommendations',
        'stock',
        'min_purchases',
        'user_id'
    ];

    public function category()
    {
        return $this->hasOne(Category::class);
    }
}
