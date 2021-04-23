<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use App\Repositories\Shop\ShoppingCarts\ShoppingCartsRepository;

class SetShoppingCart
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $sessionName      = "shopping_cart_id";
        $shopping_cart_id = \Session::get($sessionName);

        $shoppingCartRepository = new ShoppingCartsRepository($shopping_cart_id);
        
        $shopping_cart          = $shoppingCartRepository->getShoppingCart();

        \Session::put($sessionName,$shopping_cart->id);

        $request->shopping_cart = $shopping_cart;

        return $next($request);
    }
}
