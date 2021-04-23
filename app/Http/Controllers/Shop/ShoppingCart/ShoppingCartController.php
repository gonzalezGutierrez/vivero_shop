<?php

namespace App\Http\Controllers\Shop\ShoppingCart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('shopping_cart');
    }

    public function show(Request $request)
    {
        $shopping_cart = $request->shopping_cart;
        $products      = $shopping_cart->products()->get([
            'products.id',
            'products.name',
            'products.price',
            'products.image_thumb_url',
            'products.slug',
            'product_in_shopping_carts.id as id_in_shopping_cart',
            'product_in_shopping_carts.subtotal',
            'product_in_shopping_carts.amount'
        ]);
        $total         = $shopping_cart->total();
        return view('Shop.Pages.shopping_cart.show',compact('total','products'));
    }
}
