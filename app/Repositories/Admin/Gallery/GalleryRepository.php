<?php


namespace App\Repositories\Admin\Gallery;


use App\Interfaces\RepositoryModelInterface;
use App\Models\galleryPhotos;
use Dotenv\Repository\RepositoryInterface;

class GalleryRepository implements RepositoryModelInterface
{

    public $model;

    public function __construct()
    {
        $this->model = new galleryPhotos();
    }

    public function all(array $configurations)
    {
        $productId = $configurations['product_id'];
        return $this->model->where('product_id',$productId)
            ->get(['id','title','image_url','is_active']);
    }

    public function find($id)
    {
        return $this->model->findBySlug($id);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(array $data, $id)
    {
        $record = $this->find($id);
        return $record->fill($data)->save();
    }

    public function inactivate($id)
    {
        $record = $this->find($id);
        return $record->fill(['is_active'=>0])->save();
    }
}
