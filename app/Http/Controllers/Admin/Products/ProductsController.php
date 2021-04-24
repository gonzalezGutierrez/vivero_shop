<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Products\ProductStoreRequest;
use App\Repositories\Admin\Categories\CategoryRepository;
use App\Repositories\Admin\Products\ProductRepository;
use Illuminate\Http\Request;

class ProductsController extends Controller
{


    /**
     * @var ProductRepository
     */
    private $repository;
    /**
     * @var CategoryRepository
     */
    private $categoryRepository;

    public function __construct()
    {
        $this->repository = new ProductRepository();
        $this->categoryRepository = new CategoryRepository();
    }

    public function index()
    {
        $products = $this->repository->all([]);
        return view('Admin.products.index',compact('products'));
    }

    public function create()
    {
        $product = $this->repository->model;
        $categories = $this->categoryRepository->allPluck();
        return view('Admin.products.create',compact('product','categories'));
    }

    public function store(ProductStoreRequest $request)
    {
        try {

            $this->repository->create($request->all());

            return redirect('admin/products')->with('status_success','El producto fue agregado correctamente');

        }catch (\Exception $exception) {
            dd($exception);
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($slug)
    {
        $product = $this->repository->find($slug);
        $categories = $this->categoryRepository->allPluck();
        return view('Admin.products.edit',compact('product','categories'));
    }

    public function update(ProductStoreRequest $request, $slug)
    {
        try {

            $this->repository->update($request->all(),$slug);

            return redirect('admin/products')->with('status_success','El producto fue actualizado correctamente');

        }catch (\Exception $exception) {
            dd($exception);
            dd(1);
        }
    }

    public function destroy($slug)
    {
        $this->repository->inactivate($slug);
        return redirect('admin/products')->with('status_success','El producto fue dado de baja correctamente');
    }
}
