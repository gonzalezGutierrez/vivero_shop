<?php

namespace App\Http\Controllers\Shop\WishList;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WishListController extends Controller
{

    public function __construct()
    {
        $this->middleware('wish_list');
    }

    public function show(Request $request)
    {
        $wishList = $request->wishList;
        $products = $wishList->products()->get();
        return view('Shop.pages.wish_list.show',compact('wishList','products'));
    }

    public function destroy()
    {
        //
    }
}
