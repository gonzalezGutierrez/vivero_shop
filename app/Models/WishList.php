<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WishList extends Model
{
    use HasFactory;

    protected $table = 'wish_lists';
    protected $primaryKey = 'id';

    protected $fillable = ['user_id'];

    public function products()
    {
        return $this->belongsToMany(Product::class,'product_in_wish_lists');
    }

}
