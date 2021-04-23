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
        $images  = $this->repository->all(['product_id'=>$product->id]);
        $gallery = $this->repository->model;
        return view('Admin.gallery.index',compact('images','product','gallery'));
    }

    public function store(Request $request,$product_slug)
    {
        try{
            
            $product = $this->productRepository->find($product_slug);

            //enviar a un middleware
            $images  = $this->repository->all(['product_id'=>$product->id]);

            if ( $images->count() == 6) {
                return back()->with('status_warning','Ya no tienes espacio para agregar una nueva foto');
            }

            $this->repository->create([
                'title'=>$request->title,
                'image_url'=>$request->image_url,
                'product_id'=>$product->id
            ]);

            return back()->with('status_success','Imagen agregada correctamente...');

        }catch(\Exception $exception) {
            dd($exception);
        }
    }

    public function destroy($product_slug,$id)
    {
        try {
            $this->repository->inactivate($id);
            return redirect('admin/products/'.$product_slug.'/gallery')->with('status_success','La imagen fue dada de baja correctamente');
        }catch (\Exception $exception) {
            dd($exception);
        }
    }
}
