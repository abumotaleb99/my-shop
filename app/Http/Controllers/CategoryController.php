<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        return view("admin.category.add-category");
    }

    public function saveCategoryInfo(Request $request) {
        // return $request->all();

        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->status = $request->status;
        $category->save();

        // Another way to save data
        // Category::create($request->all());

        return redirect("/category/add-category")->with("message", "Category Info Saved Successfully.");
    }
}
