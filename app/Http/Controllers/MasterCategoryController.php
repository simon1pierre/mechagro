<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
class MasterCategoryController extends Controller
{
    public function storecat(Request $request){
        // validating data quality from form !!!! simon Pierre silence is golden
        $validate_data = $request->validate([
            'category_name'=> 'unique:categories|max:100',
        ]);
        
        category::create($validate_data);
        return redirect()->back();

    }
}
