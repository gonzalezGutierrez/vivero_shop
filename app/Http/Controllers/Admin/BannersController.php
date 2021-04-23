<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Categories\CategoryStoreRequest;
use App\Repositories\Admin\Banners\BannerRepository;
use Illuminate\Http\Request;

class BannersController extends Controller
{
    protected $repository;
    protected $bannerRepository;

    public function __construct()
    {
        $this->repository = new BannerRepository();

    }

    public function index()
    {
        $banners = $this->repository->all([]);
        return view('Admin.banners.index',compact('banners'));
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

    public function update(GalleriesStoreRequest $request, $id)
    {
        try {

            $this->repository->update($request->all(),$id);
            return redirect('admin/gallery')->with('status_success','La imagen fue actualizada correctamente');

        }catch (\Exception $exception){
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
