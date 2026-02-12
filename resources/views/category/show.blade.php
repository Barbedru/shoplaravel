@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold mb-4">{{ $category->name }}</h1>

    @if($category->description)
        <p class="mb-6">{{ $category->description }}</p>
    @endif

    <h2 class="text-2xl font-semibold mb-6">Produits dans cette catégorie</h2>

    @if($category->products->count() > 0)
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <ul class="space-y-2">
            @foreach($category->products as $product)
                <div class="bg-white shadow-md rounded-xl overflow-hidden hover:shadow-xl transition duration-300">
                    <div class="p-5">
                        <h3 class="text-lg font-semibold mb-2">
                            {{ $product->name }}
                        </h3>

                        <p class="text-xl font-bold text-green-600 mb-4">
                            {{ number_format($product->price, 2) }} €
                        </p>

                        <a href="{{ route('products.show', $product) }}"
                           class="block text-center bg-green-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition">
                            Voir le produit
                        </a>
                    </div>

                </div>
            @endforeach

        </div>

    @else

        <div class="bg-gray-100 p-6 rounded-xl text-center text-gray-500">
            Aucun produit disponible dans cette catégorie pour le moment.
        </div>

    @endif

@endsection

