<?php


namespace App\Repositories\Admin\Banners;


use App\Interfaces\RepositoryModelInterface;
use App\Models\Banner;
use Dotenv\Repository\RepositoryInterface;

class BannerRepository implements RepositoryModelInterface
{

    public $model;

    public function __construct()
    {
        $this->model = new Banner();
    }

    public function all(array $configurations)
    {
        return $this->model->get(['id','title','image_url','is_active','redirect_to']);
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
        $record = $this->find($id);
        return $record->fill($data)->save();
    }

    public function inactivate($id)
    {
        $record = $this->find($id);
        return $record->fill(['is_active'=>0])->save();
    }
}
