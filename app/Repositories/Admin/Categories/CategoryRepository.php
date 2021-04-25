<?php


namespace App\Repositories\Admin\Categories;


use App\Interfaces\RepositoryModelInterface;
use App\Models\Category;

class CategoryRepository implements RepositoryModelInterface
{

    public $model;

    public function __construct()
    {
        $this->model = new Category();
    }

    public function get_categories_or_subcategories($option)
    {
        switch($option)
        {
            case 'categories' : {
                return $this->all([]);
                break;
            }
            case 'sub_categories' : {
                return $this->sub_categories();
                break;
            }

            case '' : {
                return $this->all([]);
            }

            default : {
                abort(404);
                break;
            }
        }
    }

    public function all(array $configurations)
    {
        return $this->model->with('sub_categories')->where('parent_id',null)
        ->get(['id','slug','name','parent_id','is_active']);
    }

    public function sub_categories()
    {
        return $this->model->where('parent_id','<>',null)          
            ->get(['id','slug','name','parent_id','is_active']);
    }

    public function allPluck()
    {
        return $this->model->where('is_active',1)
            ->pluck('name','id');
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

    public function categoriesSHOP()
    {
        return $this->model->where('is_active',1)
            ->with('products')
            ->orderBy('id','DESC')
            ->select(['id','name','slug','created_at'])
            ->get();
    }
}
