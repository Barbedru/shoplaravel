@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold mb-4">{{ $category->name }}</h1>

    @if($category->description)
        <p class="mb-6">{{ $category->description }}</p>
    @endif

    <h2 class="text-2xl font-semibold mb-4">Produits dans cette catégorie</h2>

    @if($category->products->count() > 0)
        <ul class="space-y-2">
            @foreach($category->products as $product)
                <li class="border p-4 rounded">
                    <strong>{{ $product->name }}</strong> - {{ $product->price }} €
                </li>
            @endforeach
        </ul>
    @else
        <p class="text-gray-500">Aucun produit dans cette catégorie.</p>
    @endif
@endsection
