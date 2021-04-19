<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Admin\Categories\CategoryRepository;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    protected $repository;

    public function __construct()
    {
        $this->repository = new CategoryRepository();
    }

    public function index()
    {
        $categories = $this->repository->all([]);
        return view('Admin.categories.index',compact('categories'));
    }

    public function create()
    {
        $category = $this->repository->model;
        return view('Admin.categories.create',compact('category'));
    }

    public function store(Request $request)
    {
        try {

            $this->repository->create($request->all());

            return redirect('admin/categories')->with('status_success','La categoría fue agregada correctamente');

        }catch (\Exception $exception) {
            dd($exception);
        }
    }

    public function show($slug)
    {
        $category = $this->repository->find($slug);
        return view('Admin.categories.show',compact('category'));
    }


    public function edit($slug)
    {
        $category = $this->repository->find($slug);
        return view('Admin.categories.edit',compact('category'));
    }

    public function update(Request $request, $slug)
    {
        try {

            $this->repository->update($request->all(),$slug);
            return redirect('admin/categories')->with('status_success','La categoría fue actualizada correctamente');

        }catch (\Exception $exception){
            dd($exception);
        }
    }

    public function destroy($slug)
    {
        try {
            $this->repository->inactivate($slug);
            return redirect('admin/categories')->with('status_success','La categoría fue dada de baja correctamente');
        }catch (\Exception $exception) {
            dd($exception);
        }
    }
}
