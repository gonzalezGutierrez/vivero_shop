<?php

namespace App\Http\Controllers\Shop\ProductInWishList;

use App\Http\Controllers\Controller;
use App\Repositories\Admin\Products\ProductRepository;
use App\Repositories\Shop\ProductsInWishList\ProductsInWishListRepository;
use Illuminate\Http\Request;

class ProductsInWishListController extends Controller
{

    private $repository;
    private $productRepository;
    public function __construct()
    {
        $this->middleware('wish_list');
        $this->repository = new ProductsInWishListRepository();
        $this->productRepository = new ProductRepository();
    }

    public function store(Request $request,$product_slug)
    {

        $wishList = $request->wishList;

        $product  = $this->productRepository->find($product_slug);

        $this->repository->create([
            'product_id' =>$product->id,
            'wish_list_id' => $wishList->id
        ]);

        return redirect('wish_list')->with('status_success','El producto fue agregado a la lista de deseos');

    }

    public function destroy($id)
    {
        //
    }
}
