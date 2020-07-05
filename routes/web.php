<?php

use Illuminate\Support\Facades\Auth;
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






Auth::routes();

Route::get('/home', 'HomeController@index')->middleware('verified');



Route::group(['prefix' => 'admin'], function () {
    Route::resource('marketplaces', 'Admin\MarketplaceController', ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('products', 'Admin\ProductController', ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('productCategories', 'Admin\ProductCategoriesController', ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('productSubCategories', 'Admin\ProductSubCategoryController', ["as" => 'admin']);
});
