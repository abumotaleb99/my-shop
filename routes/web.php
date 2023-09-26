<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OganiController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;

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
Route::post('/search-product', [OganiController::class, 'searchProduct'])->name('search-product');

// Cart
Route::get('/cart/show', [CartController::class, 'showCart']);
Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('add-to-cart');
Route::get('/cart-item/delete/{rowId}', [CartController::class, 'deleteCartItem'])->name('delete-cart-item');

// Customer
Route::get('/customer/register', [CustomerController::class, 'showCustomerRegisterForm'])->name('customer-register');
Route::post('/customer/customer-register', [CustomerController::class, 'customerRegister']);
Route::get('/customer/login', [CustomerController::class, 'showCustomerLoginForm'])->name('customer-login');
Route::post('/customer/customer-login', [CustomerController::class, 'customerLogin']);
Route::post('/customer/logout', [CustomerController::class, 'customerLogout'])->name('customer-logout');

// Checkout, Billing and Payment
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::post('/order/new-order', [CheckoutController::class, 'newOrder'])->name('new-order');
Route::get('/order/success', [CheckoutController::class, 'successOrder'])->name('success-order');


Route::middleware(['check.user'])->group(function () {
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

// Order
Route::get('/order/manage-order', [OrderController::class, 'manageOrderInfo'])->name('manage-order');
Route::get('/order/view-order/{id}', [OrderController::class, 'viewOrderInfo'])->name('view-order');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
