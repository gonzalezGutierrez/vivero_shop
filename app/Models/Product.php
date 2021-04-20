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
        'user_id',
        'is_active_to_shop'
    ];

    public function category()
    {
        return $this->hasOne(Category::class);
    }

    public function findBySlug($slug)
    {
        return $this->where('slug',$slug)->firstOrFail();
    }

    public function url()
    {
        return $this->id ? 'admin/products/'.$this->slug : 'admin/products';
    }

    public function method()
    {
        return $this->id ? 'PUT' : 'POST';
    }
}
