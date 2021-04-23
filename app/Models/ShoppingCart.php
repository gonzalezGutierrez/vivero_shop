<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    use HasFactory;


    public function products()
    {
        return $this->belongsToMany(Product::class,'product_in_shopping_carts');
    }

    public function total()
    {
        return $this->products()->sum('subtotal');
    }
}
