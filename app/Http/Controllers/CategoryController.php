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
        $this->validate($request, [
            'name' => 'required|regex:/^[\pL\s\-]+$/u|min:3|max:15',
            'description' => 'required',
            'status' => 'required'
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->status = $request->status;
        $category->save();

        // Another way to save data
        // Category::create($request->all());

        return redirect("/category/add-category")->with("message", "Category Info Saved Successfully.");
    }

    public function manageCategoryInfo() {
        $categories = Category::all();

        return view("admin.category.manage-category", ['categories' => $categories]);
    }

    public function editCategoryInfo($id) {
        $category = Category::find($id);

        return view("admin.category.edit-category", ["category" => $category]);
    }

    public function updateCategoryInfo(Request $request) {
        $category = Category::find($request->id);

        $category->name = $request->name;
        $category->description = $request->description;
        $category->status = $request->status;
        $category->save();

        return redirect("/category/manage-category")->with("message", "Category Info Updated Successfully.");
    }

    public function deleteCategoryInfo($id) {
        $category = Category::find($id);

        $category->delete();

        return redirect("/category/manage-category")->with("message", "Category Info Deleted Successfully.");
    }

}
