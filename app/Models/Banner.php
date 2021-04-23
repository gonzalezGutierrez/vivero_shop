<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $table = 'banners';
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'image_url',
        'is_active',
        'redirect_to'
    ];

    public function url()
    {
        return $this->id ? 'admin/banners/'.$this->slug : 'admin/banners';
    }

    public function method()
    {
        return $this->id ? 'PUT' : 'POST';
    }
}
