<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

use Illuminate\Http\Request;

class OganiController extends Controller
{
    public function index() {
        // $categories = Category::where('status', 1)->get();
        $latestProducts = Product::where('status', 1)
                                    ->orderBy('id', 'DESC')
                                    ->take(8)
                                    ->get();

        return view('front-end.home.home', [
            // 'categories' => $categories,
            'latestProducts' => $latestProducts,
        ]);
    }

    public function categoryProduct($id) {
        $AllCategoryProducts = Product::where('category_id', $id)
                                    ->where('status', 1)
                                    ->paginate(9);

        $LatestCategoryProducts = Product::where('category_id', $id)
                                    ->where('status', 1)
                                    ->orderBy('created_at', 'desc') 
                                    ->limit(3)
                                    ->get();
                                    
        return view('front-end.category.category-content', [
            'AllCategoryProducts' => $AllCategoryProducts, 
            'LatestCategoryProducts' => $LatestCategoryProducts, 
        ]);
    }

    public function productDetails($id) {
        $productDetails = Product::find($id);
        $relatedProducts = Product::where('category_id', $productDetails->category_id)
                                    ->where('status', 1)
                                    ->where('id', '<>', $productDetails->id) // Exclude the current product
                                    ->limit(4)
                                    ->get();

        return view('front-end.product.product-details', [
            'productDetails' => $productDetails,
            'relatedProducts' => $relatedProducts
        ]);
    }

    public function shop() {
        $allProducts = Product::where('status', 1)
                                ->paginate(9);

        $latestProducts = Product::where('status', 1)
                                    ->orderBy('created_at', 'desc') 
                                    ->limit(3)
                                    ->get();
        return view('front-end.shop.shop-content', [
            'allProducts' => $allProducts,
            'latestProducts' => $latestProducts,
        ]);
    }

    public function contact() {
        return view('front-end.contact.contact-content');
    }

    public function searchProduct(Request $request) {
        $searchTerm = $request->input('search');
    
        $products = Product::where('status', 1)
            ->where('name', 'like', '%' . $searchTerm . '%')
            ->paginate(12);
    
        return view('front-end.home.search', [
            'products' => $products,
        ]);
    }
    



}
