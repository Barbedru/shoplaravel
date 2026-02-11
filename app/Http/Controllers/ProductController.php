<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = \App\Models\Product::with('category')->get();

        return view('products.index', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $categories = \App\Models\Category::all();

        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Product::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
        ]);

        return redirect()->route('products.index')
            ->with('success', 'Produit créé avec succès ! ');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = \App\Models\Product::find($id);

        return view('show', [
                'product' => $product
            ]
        );

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Récupére le produit à éditer
        $product = \App\Models\Product::find($id);

        // Récupére les catégories
        $categories = \App\Models\Category::all();

        // Passe les variables à la vue
        return view('products.edit', compact('product', 'categories'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validation des données
        $validated = $request->validate([

            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'nullable|integer|min:0',

        ]);

        $validated['active'] = $request->boolean('active');

        $product = \App\Models\Product::find($id);
        $product->update($validated);


        return redirect()->route('products.index')
            ->with('success', 'Produit mis à jour !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Produit supprimé !');

    }
}
