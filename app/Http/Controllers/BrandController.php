<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        return view("admin.brand.add-brand");
    }

    
    public function saveBrandInfo(Request $request) {
        $this->validate($request, [
            'name' => 'required|regex:/^[\pL\s\-]+$/u|min:3|max:15',
            'description' => 'required',
            'status' => 'required'
        ]);

        // return $request->all();

        $brand = new Brand();
        $brand->name = $request->name;
        $brand->description = $request->description;
        $brand->status = $request->status;
        $brand->save();

        return redirect("/brand/add-brand")->with("message", "Brand Info Saved Successfully.");
    }

    public function manageBrandInfo() {
        $brands = Brand::all();

        return view("admin.brand.manage-brand", ['brands' => $brands]);
    }

    public function editBrandInfo($id) {
        $brand = Brand::find($id);

        return view("admin.brand.edit-brand", ["brand" => $brand]);
    }

    public function updateBrandInfo(Request $request) {
        $brand = Brand::find($request->id);

        $brand->name = $request->name;
        $brand->description = $request->description;
        $brand->status = $request->status;
        $brand->save();

        return redirect("/brand/manage-brand")->with("message", "Brand Info Updated Successfully.");
    }

    public function deleteBrandInfo($id) {
        $brand = Brand::find($id);

        $brand->delete();

        return redirect("/brand/manage-brand")->with("message", "Brand Info Deleted Successfully.");
    }

    
}
