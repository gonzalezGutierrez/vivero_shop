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
        return $this->model->with([
            'sub_categories' => function($query){
                return $query->select(['id','slug','name','parent_id','is_active']);
            }
        ])->where('parent_id',null)
        ->when( ! empty($configurations['is_active']) , function ($query) use($configurations) {
            return $query->where('is_active',1);
        })
        ->get(['id','slug','name','parent_id','is_active']);
    }

    public function sub_categories($columns = ['id','slug','name','parent_id','is_active'])
    {
        return $this->model->where('parent_id','<>',null)          
            ->get($columns);
    }

    public function get_sub_categories_by_category_id($category_id ,$columns = ['id','slug','name','parent_id','is_active'])
    {
        return $this->model->where('parent_id',$category_id)
            ->get($columns);
    }

    public function allPluck()
    {
        return $this->model->where('is_active',1)
            ->select('is_active','name')
            ->pluck('name','id');
    }

    public function all_sub_categories_pluck()
    {
        return $this->model->where('is_active',1)
            ->where('parent_id','<>',null)
            ->select('id','name')
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
}
