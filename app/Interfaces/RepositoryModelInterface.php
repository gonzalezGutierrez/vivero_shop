<?php


namespace App\Interfaces;


interface RepositoryModelInterface
{

    public function all(array $configurations);

    public function find($id);

    public function create(array $data);

    public function update(array $data,$id);

    public function inactivate($id);

}
