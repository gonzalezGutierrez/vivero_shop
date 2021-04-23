<?php namespace App\Repositories\Shop\Reviews;

use App\Interfaces\RepositoryModelInterface;
use App\Models\Review;
use App\Repositories\Shop\Reviews\ReviewHelper;

class ReviewRepository implements  RepositoryModelInterface {

    public $model;

    public function __construct()
    {
        $this->model = new Review();
    }

    public function all(array $configurations)
    {
        $productId = $configurations['product_id'];
        return $this->model->where('product_id',$productId)
            ->where('status','approved')
            ->orderBy('created_at','DESC')
            ->take(3)
            ->get(ReviewHelper::$FIELDS_REVIEWS);
    }

    public function find($id)
    {
        return "";
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
        $record = $this->find($slug);
        return $record->fill(['is_active'=>0])->save();
    }

}