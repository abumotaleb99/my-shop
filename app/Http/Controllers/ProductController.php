<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $brands = Brand::where('status', 1)->get();
        $categories = Category::where('status', 1)->get();

        return view("admin.product.add-product", [
            'brands' => $brands,
            'categories' => $categories,
        ]);
    }

        
    public function saveProductInfo(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'brand_id' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
            'image' => 'required',
            'status' => 'required'
        ]);

        // return $request->all();

        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();
        $timestamp = now()->timestamp; // Get the current 
        $directory = 'admin/product-images/';
        $imageUrl = $directory . $timestamp . '_' . $imageName; // Add timestamp to the filename
        $image->move($directory, $timestamp . '_' . $imageName);

        $product = new Product();
        $product->name = $request->name;
        $product->brand_id = $request->brand_id;
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        $product->image = $imageUrl;
        $product->status = $request->status;
        $product->save();

        return redirect("/product/add-product")->with("message", "Product Info Saved Successfully.");
    }

    public function manageProductInfo() {
        $products = DB::table('products')
                        ->join('categories', 'products.category_id', '=', 'categories.id')
                        ->join('brands', 'products.brand_id', '=', 'brands.id')
                        ->select(
                            'products.id',
                            'products.name as product_name', 
                            'categories.name as category_name', 
                            'brands.name as brand_name',
                            'products.price',
                            'products.quantity',
                            'products.short_description',
                            'products.long_description',
                            'products.image',
                            'products.status'
                        )
                        ->get();

        return view("admin.product.manage-product", ['products' => $products]);
    }

    public function editProductInfo($id) {
        $product = Product::find($id);
        $brands = Brand::where('status', 1)->get();
        $categories = Category::where('status', 1)->get();
         
        return view('admin.product.edit-product', [
            'product' => $product,
            'brands' => $brands,
            'categories' => $categories,
            ]);
    }

    public function updateProductInfo(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'brand_id' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
            'status' => 'required'
        ]);

        $image = $request->file('image');

        $product = Product::find($request->id);

        if($image){   
            unlink($product->image);

            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $timestamp = now()->timestamp; // Get the current 
            $directory = 'admin/product-images/';
            $imageUrl = $directory . $timestamp . '_' . $imageName; // Add timestamp to the filename
            $image->move($directory, $timestamp . '_' . $imageName);

            $product->name = $request->name;
            $product->brand_id = $request->brand_id;
            $product->category_id = $request->category_id;
            $product->price = $request->price;
            $product->quantity = $request->quantity;
            $product->short_description = $request->short_description;
            $product->long_description = $request->long_description;
            $product->image = $imageUrl;
            $product->status = $request->status;
            $product->save();

            return redirect('/product/manage-product')->with('message', 'Product Updated Successfully.');

        }else{
            $product->brand_id = $request->brand_id;
            $product->category_id = $request->category_id;
            $product->name = $request->name;
            $product->price = $request->price;
            $product->quantity = $request->quantity;
            $product->short_description = $request->short_description;
            $product->long_description = $request->long_description;
            $product->status = $request->status;
            $product->save();
        }

        return redirect('/product/manage-product')->with('message', 'Product Updated Successfully.');
    }

    
    public function deleteProductInfo($id) {
        $product = Product::find($id);

        $product->delete();

        return redirect("/product/manage-product")->with("message", "Product Info Deleted Successfully.");
    }




}
