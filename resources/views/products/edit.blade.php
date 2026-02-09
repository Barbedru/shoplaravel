
@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Modifier le produit</h1>


<form action="{{ route('products.update', $product) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-4">


        <label for="name" class="block font-medium mb-1">Nom</label>
        <input type="text" name="name" id="name"
               value="{{ old('name') }}"
               class="w-full border rounded px-3 py-2"
               required>
        <label for="slug" class="block font-medium mb-1">Slug</label>
        <input type="text" name="slug" id="slug"
               value="{{ old('slug') }}"
               class="w-full border rounded px-3 py-2"
               required>
        <label for="description" class="block font-medium mb-1">Description</label>
        <input type="text" name="description" id="description"
               value="{{ old('description') }}"
               class="w-full border rounded px-3 py-2"
               required>
        <label for="price" class="block font-medium mb-1">Prix</label>
        <input type="text" name="price" id="price"
               value="{{ old('Prix') }}"
               class="w-full border rounded px-3 py-2"
               required>
        <label for="stock" class="block font-medium mb-1">Stock</label>
        <input type="text" name="stock" id="stock"
               value="{{ old('Stock') }}"
               class="w-full border rounded px-3 py-2"
               required>
        <label for="active" class="block font-medium mb-1">Active</label>
        <input type="checkbox" name="active" id="active"
               value="{{ old('Status') }}"
               class="w-full border rounded px-3 py-2"
               required>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
            Mettre à jour
        </button>

        <form action="{{ route('products.destroy', $product) }}" method="POST"
              onsubmit="return confirm('Êtes-vous sûr ?')">
            @csrf
            @method('DELETE')

            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">
                Supprimer
            </button>
        </form>

    </div>



</form>
@endsection

