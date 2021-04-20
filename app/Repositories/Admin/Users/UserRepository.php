<?php


namespace App\Repositories\Admin\Users;


use App\Interfaces\RepositoryModelInterface;
use App\Models\User;

class UserRepository implements RepositoryModelInterface
{

    public $model;

    public function __construct()
    {
        $this->model = new User();
    }

    public function all(array $configurations)
    {
        return $this->model->all();
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
