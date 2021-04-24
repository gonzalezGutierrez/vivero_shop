<?php


namespace App\Repositories\Shop\ProductsInWishList;


use App\Models\ProductInWishList;

class ProductsInWishListRepository implements \App\Interfaces\RepositoryModelInterface
{

    private $model;

    public function __construct()
    {
        $this->model = new ProductInWishList();
    }

    public function all(array $configurations)
    {

    }

    public function find($id)
    {
        // TODO: Implement find() method.
    }

    public function create(array $data)
    {
        return $this->model->updateOrCreate(
            [
                'wish_list_id'=>$data['wish_list_id'],
                'product_id'=>$data['product_id'],
            ],
            $data
        );
    }

    public function update(array $data, $id)
    {

    }

    public function inactivate($id)
    {

    }
}
