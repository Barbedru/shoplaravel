
@extends('layouts.app')

@section('content')

<h1 class="text-3xl font-bold mb-2">Catégories</h1>
<p class="text-gray-600 mb-8">Explorez nos différentes catégories de produits</p>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach($categories as $category)
        <div class="bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition duration-300 flex flex-col justify-between">

            {{-- Si tu as une image pour la catégorie --}}
            @if($category->image)
                <img src="{{ asset('storage/' . $category->image) }}"
                     alt="{{ $category->name }}"
                     class="w-full h-40 object-cover rounded-lg mb-4">
            @endif

            <div>
                <h2 class="text-xl font-semibold mb-2">
                    {{ $category->name }}
                </h2>

                {{-- Si tu veux afficher le nombre de produits --}}
                @if($category->products)
                    <p class="text-gray-500 text-sm mb-4">
                        {{ $category->products->count() }} produit(s)
                    </p>
                @endif
            </div>

            <a href="{{ route('category.show', $category) }}"
               class="mt-4 inline-block text-center bg-green-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition">
                Voir la catégorie
            </a>

        </div>
    @endforeach
</div>

@endsection
