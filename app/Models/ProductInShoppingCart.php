<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductInShoppingCart extends Model
{
    use HasFactory;

    protected $table = 'product_in_shopping_carts';
    protected $primaryKey = 'id';

    protected $fillable = [
        'product_id',
        'shopping_cart_id',
        'amount',
        'subtotal',
        'price'
    ];
}
