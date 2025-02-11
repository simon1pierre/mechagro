<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class MasterCategoryController extends Controller
{
    public function storecat(Request $request){
        // validating data quality from form !!!! simon Pierre silence is golden
        $validate_data = $request->validate([
            'category_name'=> 'unique:categories|max:100|min:4',
        ]);
        
        category::create($validate_data);
        return redirect()->back()->with('success', 'Category Added Successfully!');

    }

    public function showcat($id){
        $category_info = Category::find($id);
        return view('admin.category.edit', compact('category_info'));

    }

    public function updatecat(Request $request, $id){

        $category = Category::FindOrFail($id);

        // validating before submission 
        $validate_data = $request->validate([
            'category_name'=> 'unique:categories|max:100|min:4',
        ]);

        $category->update($validate_data);

        return redirect()->back()->with('success', 'Category Updated Successfully!');
    }

    public function deletecat($id){
        Category:: FindOrFail($id)->delete();
        return redirect()->back()->with('success', 'Category Successfully Deleted!!');
    }
}
