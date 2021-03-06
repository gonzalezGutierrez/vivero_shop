<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Shop.pages.home');
});

Route::get('autentificacion',[\App\Http\Controllers\Shop\Auth\AuthController::class,'login_register_form'])->name('login');
Route::post('autentificacion/register',[\App\Http\Controllers\Shop\Auth\AuthController::class,'register']);
Route::post('autentificacion/login',[\App\Http\Controllers\Shop\Auth\AuthController::class,'login']);
Route::get('autentificacion/_logout',[\App\Http\Controllers\Shop\Auth\AuthController::class,'logout'])->middleware('auth');

Route::get('productos',[\App\Http\Controllers\Shop\Products\ProductsController::class,'index'])->name('products.index');
Route::get('productos/{product_slug}',[\App\Http\Controllers\Shop\Products\ProductsController::class,'show'])->name('products.show');
Route::get('productos/categoria/{category}',[\App\Http\Controllers\Shop\Products\ProductsController::class,'index_to_category'])->name('producs.category');
Route::get('productos/categoria/{category}/{sub_category}',[\App\Http\Controllers\Shop\Products\ProductsController::class,'index_to_sub_categories'])->name('producs.category');

Route::resource('productos/{product_slug}/reviews',\App\Http\Controllers\Shop\Reviews\ReviewsController::class)->only(['store','update','destroy']);

Route::post('products_in_shopping_carts/{product_slug}',[\App\Http\Controllers\Shop\ProductsInShoppingCarts\ProductsInShoppingCartController::class,'store']);
Route::delete('products_in_shopping_carts/{product_slug}',[\App\Http\Controllers\Shop\ProductsInShoppingCarts\ProductsInShoppingCartController::class,'destroy']);

Route::get('carrito',[\App\Http\Controllers\Shop\ShoppingCart\ShoppingCartController::class,'show'])->name('shopping_cart');

Route::get('wish_list',[\App\Http\Controllers\Shop\WishList\WishListController::class,'show'])->middleware('auth');
Route::delete('wish_list',[\App\Http\Controllers\Shop\WishList\WishListController::class,'destroy'])->middleware('auth');

Route::post('products_in_wish_list/{product_slug}',[\App\Http\Controllers\Shop\ProductInWishList\ProductsInWishListController::class,'store'])->middleware('auth');

Route::get('contacto',[\App\Http\Controllers\Shop\Pages\PageController::class,'contact']);
Route::get('nosotros',[\App\Http\Controllers\Shop\Pages\PageController::class,'about']);


Route::group(['prefix'=>'admin'],function(){

    Route::resource('categories',\App\Http\Controllers\Admin\CategoriesController::class);
    Route::resource('products',\App\Http\Controllers\Admin\Products\ProductsController::class);
    Route::resource('users',\App\Http\Controllers\Admin\UsersController::class);
    Route::resource('clients',\App\Http\Controllers\Admin\ClientsController::class);

    Route::resource('banners',\App\Http\Controllers\Admin\BannersController::class);
    Route::resource('products/{product_slug}/gallery',\App\Http\Controllers\Admin\GalleryPhotosController::class)->only(['index','store','destroy']);


});
