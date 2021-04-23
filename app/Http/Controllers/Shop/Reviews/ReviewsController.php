<?php

namespace App\Http\Controllers\Shop\Reviews;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\Shop\Reviews\ReviewStoreRequest;
use App\Repositories\Shop\Reviews\ReviewRepository;
use App\Repositories\Admin\Products\ProductRepository;

class ReviewsController extends Controller
{

    /**
     * @var ReviewRepository
     */
    private $repository;
    /**
     * @var ProductRepository
     */
    private $productRepository;

    public function __construct()
    {
        $this->repository        = new ReviewRepository();
        $this->productRepository = new ProductRepository();
    }

    public function store(ReviewStoreRequest $request, $product_slug)
    {
        try{
            
            $product = $this->productRepository->find($product_slug);
            
            $this->repository->create([
                'name'=>$request->name,
                'email'=>$request->email,
                'product_id'=>$product->id,
                'review'=>$request->review,
                'review_qualification'=>4
            ]);

            return back()->with('status_success','Tu comentario se ha agregado correctamente , espera a que el administrador te responda');

        }catch(\Exception $exception) {
            dd($exception);
        }
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
