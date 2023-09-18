<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OganiController;
use App\Http\Controllers\CategoryController;

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
Route::get('/category-product', [OganiController::class, 'categoryProduct']);
Route::get('/shop', [OganiController::class, 'shop'])->name('shop');
Route::get('/contact', [OganiController::class, 'contact'])->name('contact');


Route::get('/category/add-category', [CategoryController::class, 'index'])->name('add-category');
Route::post('/category/new-category', [CategoryController::class, 'saveCategoryInfo'])->name('new-category');
Route::get('/category/manage-category', [CategoryController::class, 'manageCategoryInfo'])->name('manage-category');
Route::get('/category/edit-category/{id}', [CategoryController::class, 'editCategoryInfo'])->name('edit-category');
Route::post('/category/update-category', [CategoryController::class, 'updateCategoryInfo'])->name('update-category');
Route::get('/category/delete-category/{id}', [CategoryController::class, 'deleteCategoryInfo'])->name('delete-category');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
