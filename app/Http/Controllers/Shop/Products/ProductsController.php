<?php

namespace App\Http\Controllers\Shop\Products;

use App\Http\Controllers\Controller;
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
        $this->repository  = new ProductRepository();
        $this->categoryRepository = new CategoryRepository();
    }

    public function index(Request $request)
    {

        $category = $request->category;

        $products = $this->repository->productsSHOP($category);

        $productsTotal = $products->toArray()['total'];

        $categories = $this->categoryRepository->categoriesSHOP();

        return view('Shop.Pages.Products.index',[
            'products'=>$products,
            'productsTotal'=>$productsTotal,
            'categories'=>$categories,
            'category_id' => $category
        ]);
    }

    public function show($slug)
    {
        $product = $this->repository->find($slug);
        $category = $product->category;
        return view('Shop.Pages.Products.show',compact('product','category'));
    }
}