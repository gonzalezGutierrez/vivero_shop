<?php namespace App\Repositories\Shop\ProductsInShopingCarts;

use App\Interfaces\RepositoryModelInterface;
use App\Models\ProductInShoppingCart;
class ProductsInShoppingCartsRepository implements RepositoryModelInterface {

    public $model;

    public function __construct()
    {
        $this->model = new ProductInShoppingCart();
    }

    public function all(array $configurations)
    {
        return "";
    }

    public function find($id)
    {
        return "";
    }

    public function create(array $data)
    {
        return $this->model->updateOrCreate(
            [
                'shopping_cart_id'=>$data['shopping_cart_id'],
                'product_id'=>$data['product_id']
            ],
            $data
        );
    }

    public function update(array $data, $id)
    {
       return "";
    }

    public function inactivate($id)
    {
        return "";
    }

    public function removeProductWithProductIdAndShoppingCartId($productId,$shoppingCartId)
    {
        return $this->model->where('product_id',$productId)
            ->where('shopping_cart_id',$shoppingCartId)
            ->delete();
    }

   

}