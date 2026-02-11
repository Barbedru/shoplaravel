<?php

namespace App\Http\Controllers;

use App\Models\Category;


class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('index', compact('categories'));

    }

    public function show($id)
    {
        $category = Category::with('products')->findOrFail($id);
        $products = $category->products()->get();
        return view('index', compact('category', 'products'));

    }
}
