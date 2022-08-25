<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // show category in function
    public function view_category()
    {
        $data= Category::all();
        return view('admin.category',compact('data'));
    }
    // Add category Function
    public function add_category(Request $request)
    {
        $data = new Category;
        $data->category_name = $request->category;
        $data->save();
        return back()->with('message', 'Category Added Successfully');
    }
    // delete category function 
    public function delete_category($id){
        $data=Category::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Category Deleted Successfully');

    }
}
