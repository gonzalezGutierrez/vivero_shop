<?php namespace App\Repositories\Shop\ShoppingCarts;
use App\Interfaces\RepositoryModelInterface;

use App\Models\ShoppingCart;

class ShoppingCartsRepository implements RepositoryModelInterface {


    public $model;
    private $shopping_cart_id;

    public function __construct($shopping_cart_id)
    {
        $this->model            = new ShoppingCart();
        $this->shopping_cart_id = $shopping_cart_id;
    }

    public function getShoppingCart()
    {
        if ($this->shopping_cart_id) {
            return $this->find($this->shopping_cart_id);
        } else{
            return $this->create([]);
        }
    }

    public function all(array $configurations)
    {
        return "";
    }

    public function find($id)
    {
        return $this->model->findOrFail($id);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(array $data, $id)
    {
        $record = $this->find($slug);
        return $record->fill($data)->save();
    }

    public function inactivate($slug)
    {
        return "";
    }



}