<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;


Route::controller(ProductController::class)->group(function() {
    Route::get('/coffee_shop/index','index');
    Route::get('/product/create','create');
    Route::post('/product/create','store')->name('create_product');
    Route::get('/coffee_shop/index/{id}','delete');

});

Route::controller(CategoryController::class)->group(function() {
    Route::get('/category/index','index');
    Route::get('/category/create','create');
    Route::post('/category/create','store')->name('create_category');



});

Route::get('/', function () {
    return view('welcome');
});
