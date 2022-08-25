<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller
class AdminController extends Controller
{
    public function view_category()
    {
        return view('admin.category');
    }
    public function add_category(Request $request)
    {
        $data = new Category;
        $data->category_name = $request->category;
        $data->save();
        return back()->with('message', 'Your Category has added in The List!');
    }
}
