<?php

namespace App\Http\Middleware;

use App\Repositories\Shop\WishList\WishListRepository;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class setWishList
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

        $user = Auth::user();

        $wishListRepository = new WishListRepository($user->id);

        $wishList = $wishListRepository->getWishList();

        $request->wishList = $wishList;

        return $next($request);

    }
}
