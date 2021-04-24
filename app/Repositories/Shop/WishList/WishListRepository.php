<?php


namespace App\Repositories\Shop\WishList;


use App\Models\WishList;

class WishListRepository implements \App\Interfaces\RepositoryModelInterface
{

    /**
     * @var WishList
     */
    private $model;
    private $userId;

    public  function __construct($userId)
    {
        $this->model = new WishList();
        $this->userId = $userId;
    }

    public function all(array $configurations)
    {

    }

    public function getWishList() {

        $wishList = $this->find($this->userId);

        if ($wishList) {
            return $wishList;
        }

        return $this->create(['user_id'=>$this->userId]);

    }

    public function find($userId)
    {
        return $this->model->where('user_id',$userId)->first();
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(array $data, $id)
    {
        // TODO: Implement update() method.
    }

    public function inactivate($userId)
    {
        $wishList = $this->find($userId);
        return $wishList->delete();
    }
}
