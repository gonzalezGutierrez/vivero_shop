<?php

namespace App\Http\Controllers\Shop\Products;

use App\Http\Controllers\Controller;
use App\Repositories\Admin\Categories\CategoryRepository;
use App\Repositories\Admin\Products\ProductRepository;
use App\Repositories\Shop\Reviews\ReviewRepository;
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
    /**
     * @var ReviewRepository
     */
    private $reviewRepository;


    public function __construct()
    {
        $this->repository         = new ProductRepository();
        $this->categoryRepository = new CategoryRepository();
        $this->reviewRepository   = new ReviewRepository();
    }

    public function index()
    {

        $products      = $this->repository->get_products();

        $productsTotal = $products->toArray()['total'];

        $sidebar       = 'sidebar_categories';

        return view('Shop.Pages.Products.index',[
            'products'      =>$products,
            'productsTotal' =>$productsTotal,
            'sidebar'       => $sidebar
        ]);

    }

    public function index_to_category($category_slug)
    {

        $category      = $this->categoryRepository->find($category_slug);

        $subcategories = $this->categoryRepository->get_sub_categories_by_category_id($category->id); 

        $products      = $this->repository->get_products_factory($subcategories,$category->id);

        $productsTotal = $products->toArray()['total'];

        $sidebar       = 'sidebar_category_selected';

        return view('Shop.Pages.Products.index',[
            'products'      =>$products,
            'subcategories' =>$subcategories,
            'productsTotal' =>$productsTotal,
            'category'      =>$category,
            'sidebar'       =>$sidebar
        ]);
    }

    public function index_to_sub_categories($category_slug,$sub_category_slug)
    {

        $category      = $this->categoryRepository->find($category_slug);
        
        $subcategory   = $this->categoryRepository->find($sub_category_slug);

        $products      = $this->repository->get_products_with_category($subcategory->id);

        $productsTotal = $products->toArray()['total'];

        $subcategories = $this->categoryRepository->get_sub_categories_by_category_id($category->id);

        $sidebar       = "sidebar_sub_category_selected";
        
        return view('Shop.Pages.Products.index',[
            'products'      =>$products,
            'productsTotal' =>$productsTotal,
            'category'      => $category,
            'subcategories' =>$subcategories,
            'subcategory'   =>$subcategory,
            'sidebar'       =>$sidebar
        ]);

    }

    public function show($slug)
    {
        $product  = $this->repository->find($slug);
        $category = $product->category;
        $reviews  = $this->reviewRepository->all(['product_id'=>$product->id]);
        return view('Shop.Pages.Products.show',compact('product','category','reviews'));
    }
}