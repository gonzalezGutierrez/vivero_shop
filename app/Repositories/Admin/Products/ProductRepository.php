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

    //SHOP
    public function get_products()
    {
        return $this->model->where('is_active_to_shop',1)
            ->orderBy('id','DESC')
            ->select(ProductHelper::$FIELDS_SHOP_LIST)
            ->paginate(15);
    }

    public function get_products_factory($sub_categories,$category_id)
    {
        return ($sub_categories->count() > 0 ) 
            ? $this->get_products_with_sub_categories($sub_categories) 
            : $this->get_products_with_category($category_id);
    }

    public function get_products_with_sub_categories($sub_categories)
    {  
        $sub_categories_arrays_id = $sub_categories;
        return $this->model->whereIn('category_id',$sub_categories_arrays_id->toArray())
            ->where('is_active_to_shop',1)
            ->select(ProductHelper::$FIELDS_SHOP_LIST)
            ->paginate(15);
    }

    public function get_products_with_category($category)
    {
        return $this->model->where('is_active_to_shop',1)
            ->where('category_id',$category)
            ->orderBy('id','DESC')
            ->select(ProductHelper::$FIELDS_SHOP_LIST)
            ->paginate(15);
    }
}
