<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

@extends('layouts.app')

@section('title', 'Produits - ShopLaravel')


@section('content')

    <h1 class="text-3xl font-bold mb-2">Nos produits</h1>
    <h2 class="text-gray-600 mb-8">Découvrez nos produits exceptionnels !</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($products as $product)
            <div class="bg-white shadow-md rounded-xl overflow-hidden hover:shadow-xl transition duration-300">


                <div class="p-5">
                    <p class="text-sm text-gray-500 mb-1">
                        <a href="{{ route('category.index') }}" class="hover:underline">
                            {{ $product->category->name }}
                        </a>
                    </p>

                    <h3 class="text-lg font-semibold mb-2">
                        {{ $product->name }}
                    </h3>

                    <p class="text-xl font-bold text-green-600 mb-4">
                        {{ number_format($product->price, 2) }} €
                    </p>

                    <div class="flex justify-between items-center gap-2">
                        <a href="{{ route('products.show', $product) }}"
                           class="flex-1 text-center bg-green-500 hover:bg-green-600 text-white px-3 py-2 rounded-lg text-sm transition">
                            Voir
                        </a>


                        <form action="{{ route('cart.add', $product) }}" method="POST" >
                            @csrf
                            @method('POST')
                            <button type="submit"
                                    class="w-full bg-purple-500 hover:bg-red-600 text-white px-3 py-2 rounded-lg text-sm transition">
                                Ajouter au panier
                            </button>
                        </form>


                        <a href="{{ route('products.edit', $product) }}"
                           class="flex-1 text-center bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-2 rounded-lg text-sm transition">
                            Editer
                        </a>

                        <form action="{{ route('products.destroy', $product) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr ?')" class="flex-1">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="w-full bg-red-500 hover:bg-red-600 text-white px-3 py-2 rounded-lg text-sm transition">
                                Supprimer
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        @endforeach
    </div>

@endsection

</body>
</html>
