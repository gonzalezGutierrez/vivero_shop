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

Route::get('autentificacion',[\App\Http\Controllers\Shop\Auth\AuthController::class,'login_register_form']);
Route::post('autentificacion/register',[\App\Http\Controllers\Shop\Auth\AuthController::class,'register']);

Route::resource('productos',\App\Http\Controllers\Shop\Products\ProductsController::class)->only(['index','show']);


Route::get('contacto',[\App\Http\Controllers\Shop\Pages\PageController::class,'contact']);
Route::get('nosotros',[\App\Http\Controllers\Shop\Pages\PageController::class,'about']);

Route::group(['prefix'=>'admin'],function(){

    Route::resource('categories',\App\Http\Controllers\Admin\CategoriesController::class);
    Route::resource('products',\App\Http\Controllers\Admin\Products\ProductsController::class);
    Route::resource('users',\App\Http\Controllers\Admin\UsersController::class);
    Route::resource('clients',\App\Http\Controllers\Admin\ClientsController::class);
    Route::resource('products/{product_slug}/gallery',\App\Http\Controllers\Admin\GalleryPhotosController::class);
    Route::resource('banners',\App\Http\Controllers\Admin\BannersController::class);

});
