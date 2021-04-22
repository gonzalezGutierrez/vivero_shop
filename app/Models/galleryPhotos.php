<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class galleryPhotos extends Model
{
    use HasFactory;

    protected $table = 'gallery_photos';
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'image_url',
        'product_id',
        'is_active'
    ];

    public function url($product_slug)
    {
        return $this->id != null 
            ? 'admin/products/'.$product_slug.'/gallery/'.$this->id
            : 'admin/products/'.$product_slug.'/gallery';
    }

    public function method()
    {
        return $this->id ? 'PUT' : 'POST';
    }
 
}
