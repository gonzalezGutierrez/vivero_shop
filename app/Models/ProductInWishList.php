<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductInWishList extends Model
{
    use HasFactory;

    protected $table = 'product_in_wish_lists';
    protected $primaryKey = 'id';

    protected $fillable = [
        'wish_list_id',
        'product_id'
    ];
}
