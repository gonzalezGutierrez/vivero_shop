<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Categories\CategoryStoreRequest;
use App\Repositories\Admin\Categories\CategoryRepository;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    protected $repository;

    public function __construct()
    {
        $this->repository = new CategoryRepository();
    }

    

    public function index(Request $request)
    {

        $option = $request->option;
        $categories = $this->repository->get_categories_or_subcategories($option);
        return view('Admin.categories.index',compact('categories','option'));
    }

    public function create()
    {
        $category = $this->repository->model;
        $categories = $this->repository->allPluck();
        return view('Admin.categories.create',compact('category','categories'));
    }

    public function store(CategoryStoreRequest $request)
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
        $categories = $this->repository->allPluck();
        $category = $this->repository->find($slug);
        return view('Admin.categories.edit',compact('category','categories'));
    }

    public function update(CategoryStoreRequest $request, $slug)
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
