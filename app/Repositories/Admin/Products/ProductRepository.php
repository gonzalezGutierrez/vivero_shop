<?php


namespace App\Repositories\Admin\Products;


use App\Models\Product;

class ProductRepository implements \App\Interfaces\RepositoryModelInterface
{

    public $model;

    public function __construct()
    {
        $this->model = new Product();
    }

    public function all(array $configurations)
    {
        return $this->model->get(ProductHelper::$FIELDS_INDEX);
    }

    public function find($slug)
    {
        return $this->model->findBySlug($slug);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(array $data, $slug)
    {
        $record = $this->find($slug);
        return $record->fill($data)->save();
    }

    public function inactivate($slug)
    {
        $record = $this->find($slug);
        return $record->fill(['is_active_to_shop'=>0])->save();
    }
}
