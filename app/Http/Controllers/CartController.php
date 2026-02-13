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

        $productId = $product->id;
//        dd($product);

        //Ajoute +1 produit si déjà existant sinon ajoute dans le panier
        if (isset($cart[$productId])){
            $cart[$productId]['quantity']++;
        }else {
            $cart[$productId] = [
                'name' => $product->name,
                'price' => (float) $product->price,
                'quantity' => 1,
            ];
        }

        //Sauvegarde le panier en session
        session(['cart' => $cart]);

        return redirect()->route('cart.show')
                ->with('success', 'Produit ajouté au panier.');

    }


    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'quantity' => ['required', 'integer', 'min:0'],
        ]);

        $cart = $request->session()->get('cart', []);

        $quantity = (int) $data['quantity'];

        if ($quantity <= 0) {
            unset($cart[$product->id]);
        } else {
            $cart[$product->id]['quantity'] = $quantity;
        }

        $request->session()->put('cart', $cart);

        return back()->with('success', 'Panier mise a jour.');
    }


    public function remove(Product $product)

    {
        $cart = session('cart', []);

        // Supprimer l'article du panier
        unset($cart[$product->id]);

        session(['cart' => $cart]);

        return back()->with('success', 'Article supprimé du panier.');


    }
    public function destroy(Request $request)

    {
        session()->flush();

        return redirect()->route('cart.show');

    }
}
