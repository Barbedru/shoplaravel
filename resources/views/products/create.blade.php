
@extends('layouts.app')

@section('content')



    <h1 class="text-2xl font-bold mb-6">Nouveau produit</h1>

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            <strong>Oups !</strong> Il y a des erreurs dans le formulaire :
            <ul class="mt-2 list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="POST" class="max-w-lg">
        @csrf

        <div>

                <label for="category_id">Catégorie </label>
                <select name="category_id" id="category_id" required>
                    <option value="">-- Choisir une catégorie --</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>

            <div>
                <label for="name" class="block font-medium mb-1">Nom</label>
                <input type="text" name="name" id="name"
                       value="{{ old('name') }}"
                       class="mt-1 block w-full rounded-md border-gray-300
                      @error('name') border-red-500 @enderror">
                @error('name')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="slug" class="block font-medium mb-1">Slug</label>
                <input type="text" name="slug" id="slug"
                       value="{{ old('slug') }}"
                       class="mt-1 block w-full rounded-md border-gray-300
                  @error('slug') border-red-500 @enderror">

                @error('slug')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="description" class="block font-medium mb-1">Description</label>
                <input type="text" name="description" id="description"
                       value="{{ old('description') }}"
                       class="mt-1 block w-full rounded-md border-gray-300
                  @error('description') border-red-500 @enderror">

                @error('description')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="price" class="block font-medium mb-1">Prix</label>
                <input type="text" name="price" id="price"
                       value="{{ old('price') }}"
                       class="mt-1 block w-full rounded-md border-gray-300
                  @error('price') border-red-500 @enderror">

                @error('price')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="stock" class="block font-medium mb-1">Stock</label>
                <input type="text" name="stock" id="stock"
                       value="{{ old('stock') }}"
                       class="mt-1 block w-full rounded-md border-gray-300
                  @error('stock') border-red-500 @enderror">

                @error('stock')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror

            </div>

                <label for="status" class="block font-medium mb-1">Status</label>

                <select name="active" id="active" class="w-full border rounded px-3 py-2">
                    <option value="1" {{ old('active') == 1 ? 'selected' : '' }}>
                        Disponible
                    </option>
                    <option value="0" {{ old('active') == 0 ? 'selected' : '' }}>
                        Indisponible
                    </option>
                </select>

        </div>

        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">
            Créer le produit
        </button>
    </form>
@endsection
