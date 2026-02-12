

@extends('layouts.app')


@section('content')

    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-start">

        {{-- Infos produit --}}
        <div>
            <h1 class="text-4xl font-bold mb-4">
                {{ $product->name }}
            </h1>

            {{-- Catégorie --}}
            <p class="text-gray-500 mb-4">
                Catégorie :
                <a href="{{ route('category.show', $product->category) }}"
                   class="hover:underline">
                    {{ $product->category->name }}
                </a>
            </p>


            {{-- Prix --}}
            <p class="text-3xl font-bold text-green-600 mb-6">
                {{ number_format($product->price, 2) }} €
            </p>

            {{-- Stock --}}
            @if($product->stock > 0)
                <p class="mb-6 text-green-600 font-semibold">
                    ✔ En stock ({{ $product->stock }} disponible(s))
                </p>
            @else
                <p class="mb-6 text-red-600 font-semibold">
                    ✖ Rupture de stock
                </p>
    @endif

        </div>

    </div>

@endsection

