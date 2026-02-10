
@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Nouveau produit</h1>

    <form action="{{ route('products.store') }}" method="POST" class="max-w-lg">
        @csrf

        <div>
            <label for="category_id">Catégorie *</label>
            <select name="category_id" id="category_id" required>
                <option value="">-- Choisir une catégorie --</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
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

        </div>

        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">
            Créer le produit
        </button>
    </form>
@endsection
