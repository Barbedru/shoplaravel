<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class CartController extends Controller
{
    public function show()
    {
        // Lire depuis la session
        $cart = session('cart', []); // Avec valeur par défaut

        return view('cart.show', compact( 'cart'));

    }

    public function add(Product $product)
    {
        $cart = session('cart', []);

        //Ajoute +1 produit si déjà existant sinon ajoute dans le panier
        if (isset($cart[$product->id])){
            $cart[$product->id]++;
        }else {
            $cart[$product->id] = 1;
        }

        //Sauvegarde le panier en session
        session(['cart' => $cart]);

        return redirect()->route('cart.show')
                ->with('success', 'Produit ajouté au panier.');

    }

    public function update(Request $request, Product $product)
    {

    }

    public function remove(Request $request, Product $product)
    {
        session()->forget('cart');

    }

    public function destroy(string $id)

    {
        session()->flush();

    }
}
