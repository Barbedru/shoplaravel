<?php

namespace App\Http\Controllers;

use App\Models\Category;


class CategoryController extends Controller
{
    public function show($id)
    {
        $category = Category::find($id);
        return view('category.show', compact('category'));


    }
}
