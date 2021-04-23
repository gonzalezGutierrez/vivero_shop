<?php

namespace App\Http\Controllers\Shop\ProductsInShoppingCarts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repositories\Shop\ProductsInShopingCarts\ProductsInShoppingCartsRepository;
use App\Repositories\Admin\Products\ProductRepository;

class ProductsInShoppingCartController extends Controller
{
    

    private $repository;
    private $productRepository;

    public function __construct()
    {
        $this->repository = new ProductsInShoppingCartsRepository();
        $this->productRepository = new ProductRepository();

        $this->middleware('shopping_cart');

    }

    public function store(Request $request,$product_slug)
    {

        $shopping_cart = $request->shopping_cart;

        $product = $this->productRepository->find($product_slug);

        $amount  = ( $request->amount != null && $request->amount >= $product->min_purchases )  
            ? $request->amount 
            : $product->min_purchases;

        try {
        
            $this->repository->create([
                'shopping_cart_id'=> $shopping_cart->id,
                'product_id'      => $product->id,
                'amount'          => $amount,
                'price'           => $product->price,
                'subtotal'        => $product->price * $amount
            ]);

            return redirect('carrito')->with('status_success','El producto se ha agregado al carrito correctamente');

        } catch (\Exception $exception) {
            dd($exception->getMessage());
        }

    }

    public function destroy(Request $request , $product_slug)
    {
        
        $shopping_cart = $request->shopping_cart;

        $product = $this->productRepository->find($product_slug);

        $this->repository->removeProductWithProductIdAndShoppingCartId($product->id,$shopping_cart->id);
        
        return back();
    }
}
