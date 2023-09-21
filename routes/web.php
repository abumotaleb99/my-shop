<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OganiController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;

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
 
Route::get('/', [OganiController::class, 'index'])->name('home');
Route::get('/category-product/{id}', [OganiController::class, 'categoryProduct']);
Route::get('/product-details/{id}', [OganiController::class, 'productDetails']);
Route::get('/shop', [OganiController::class, 'shop'])->name('shop');
Route::get('/contact', [OganiController::class, 'contact'])->name('contact');


// Category
Route::get('/category/add-category', [CategoryController::class, 'index'])->name('add-category');
Route::post('/category/new-category', [CategoryController::class, 'saveCategoryInfo'])->name('new-category');
Route::get('/category/manage-category', [CategoryController::class, 'manageCategoryInfo'])->name('manage-category');
Route::get('/category/edit-category/{id}', [CategoryController::class, 'editCategoryInfo'])->name('edit-category');
Route::post('/category/update-category', [CategoryController::class, 'updateCategoryInfo'])->name('update-category');
Route::get('/category/delete-category/{id}', [CategoryController::class, 'deleteCategoryInfo'])->name('delete-category');

// Brand
Route::get('/brand/add-brand', [BrandController::class, 'index'])->name('add-brand');
Route::post('/brand/new-brand', [BrandController::class, 'saveBrandInfo'])->name('new-brand');
Route::get('/brand/manage-brand', [BrandController::class, 'manageBrandInfo'])->name('manage-brand');
Route::get('/brand/edit-brand/{id}', [BrandController::class, 'editBrandInfo'])->name('edit-brand');
Route::post('/brand/update-brand', [BrandController::class, 'updateBrandInfo'])->name('update-brand');
Route::get('/brand/delete-brand/{id}', [BrandController::class, 'deleteBrandInfo'])->name('delete-brand');

// Product
Route::get('/product/add-product', [ProductController::class, 'index'])->name('add-product');
Route::post('/product/new-product', [ProductController::class, 'saveProductInfo'])->name('new-product');
Route::get('/product/manage-product', [ProductController::class, 'manageProductInfo'])->name('manage-product');
Route::get('/product/edit-product/{id}', [ProductController::class, 'editProductInfo'])->name('edit-product');
Route::post('/product/update-product', [ProductController::class, 'updateProductInfo'])->name('update-product');
Route::get('/product/delete-product/{id}', [ProductController::class, 'deleteProductInfo'])->name('delete-product');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
