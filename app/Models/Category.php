<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'slug',
        'image_url',
        'description',
        'is_active'
    ];

    public function products() {
        return $this->hasMany(Product::class);
    }

    public function findBySlug($slug)
    {
        return $this->where('slug',$slug)->firstOrFail();
    }

    public function url()
    {
        return $this->id ? 'admin/categories/'.$this->slug : 'admin/categories';
    }

    public function method()
    {
        return $this->id ? 'PUT' : 'POST';
    }
}
