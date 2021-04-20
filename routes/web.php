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
    return view('welcome');
});



Route::group(['prefix'=>'admin'],function(){

    Route::resource('categories',\App\Http\Controllers\Admin\CategoriesController::class);
    Route::resource('users',\App\Http\Controllers\Admin\UsersController::class);
    Route::resource('clients',\App\Http\Controllers\Admin\ClientsController::class);
});
