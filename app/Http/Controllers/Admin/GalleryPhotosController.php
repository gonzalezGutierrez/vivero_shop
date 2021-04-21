<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Galleries\GalleriesStoreRequest;
use App\Models\Product;
use App\Repositories\Admin\Gallery\GalleryRepository;
use App\Repositories\Admin\Products\ProductRepository;
use Illuminate\Http\Request;

class GalleryPhotosController extends Controller
{
    protected $repository;
    protected $productRepository;

    public function __construct()
    {
        $this->repository = new GalleryRepository();
        $this->productRepository = new ProductRepository();
    }

    public function index($product_slug)
    {
        $product = $this->productRepository->find($product_slug);
        $images = $this->repository->all(['product_id'=>$product->id]);
        return view('Admin.gallery.index',compact('images'));
    }

    public function create()
    {
        $galleries = $this->repository->model;
        return view('Admin.gallery.create',compact('galleries'));
    }

    public function show($id)
    {
        $gallery = $this->repository->find($id);
        return view('Admin.categories.show',compact('gallery'));
    }


    public function edit($id)
    {
        $gallery = $this->repository->find($id);
        return view('Admin.gallery.edit',compact('gallery'));
    }

    public function update(GalleriesStoreRequest $request, $id)
    {
        try {

            $this->repository->update($request->all(),$id);
            return redirect('admin/gallery')->with('status_success','La imagen fue actualizada correctamente');

        }catch (\Exception $exception){
            dd($exception);
        }
    }

    public function destroy($id)
    {
        try {
            $this->repository->inactivate($id);
            return redirect('admin/categories')->with('status_success','La imagen fue dada de baja correctamente');
        }catch (\Exception $exception) {
            dd($exception);
        }
    }
}
