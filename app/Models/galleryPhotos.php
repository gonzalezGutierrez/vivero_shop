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
        'is_active'
    ];

    public function url($role)
    {
        return $this->id ? 'admin/galley/'.$this->slug : 'admin/gallery';
    }

    public function method()
    {
        return $this->id ? 'PUT' : 'POST';
    }
 
}
