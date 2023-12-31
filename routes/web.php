<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EvaraController;
use  App\Http\Controllers\EvaraDashboardController;
use App\Http\Controllers\CategoryController;
use  App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\BrandController;
use  App\Http\Controllers\UnitController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\ProductController;
use  App\Http\Controllers\CartController;


Route::get('/',[EvaraController::class,'index'])->name('home');
Route::get('/product-category{id}',[EvaraController::class,'category'])->name('product-category');
Route::get('/product-detail/{id}',[EvaraController::class,'product'])->name('product-detail');

Route::resources(['carts'=>CartController::class]);

Route::middleware([ 'auth:sanctum',config('jetstream.auth_session'),'verified',
])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
    Route::get('/dashboard',[EvaraDashboardController::class,'index'])->name('dashboard');
    Route::resource('category',CategoryController::class);
    Route::resource('sub-category',SubCategoryController::class);
    Route::resource('brand', BrandController::class);
    Route::resource('unit', UnitController::class);
    Route::resource('color', ColorController::class);
    Route::resource('size', SizeController::class);
    Route::resource('product', ProductController::class);
    Route::get('/get-sub-category-by-category',[ProductController::class,'getSubCategoryByCategory'])->name('get-sub-category-by-category');

});
