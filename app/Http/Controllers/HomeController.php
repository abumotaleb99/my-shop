<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Customer;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalCategories = Category::get();
        $totalBrands = Brand::get();
        $totalProducts = Product::get();
        $totalCustomers = Customer::get();

        return view('admin.home.home', [
            'totalCategories' => $totalCategories,
            'totalBrands' => $totalBrands,
            'totalProducts' => $totalProducts,
            'totalCustomers' => $totalCustomers,
        ]);
    }
}
