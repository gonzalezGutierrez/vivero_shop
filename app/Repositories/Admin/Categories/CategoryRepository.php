<?php


namespace App\Repositories\Admin\Categories;


use App\Interfaces\RepositoryModelInterface;
use App\Models\Category;
use Dotenv\Repository\RepositoryInterface;

class CategoryRepository implements RepositoryModelInterface
{

    public $model;

    public function __construct()
    {
        $this->model = new Category();
    }

    public function all(array $configurations)
    {
        return $this->model->all();
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
        return $record->fill(['is_active'=>0])->save();
    }
}
