<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::controller(ProductController::class)->group(function() {
    Route::get('/coffee_shop/index','index');


});

Route::get('/', function () {
    return view('welcome');
});
