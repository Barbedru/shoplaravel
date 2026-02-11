
@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Modifier le produit</h1>


<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-4">


        <label for="name" class="block font-medium mb-1">Nom</label>
        <input type="text" name="name" id="name"
               value="{{ old('name', $product->name) }}"
               class="w-full border rounded px-3 py-2"
               required>
        <label for="slug" class="block font-medium mb-1">Slug</label>
        <input type="text" name="slug" id="slug"
               value="{{ old('slug', $product->slug) }}"
               class="w-full border rounded px-3 py-2"
               required>
        <label for="description" class="block font-medium mb-1">Description</label>
        <input type="text" name="description" id="description"
               value="{{ old('description', $product->description) }}"
               class="w-full border rounded px-3 py-2"
               required>
        <label for="price" class="block font-medium mb-1">Prix</label>
        <input type="text" name="price" id="price"
               value="{{ old('price', $product->price) }}"
               class="w-full border rounded px-3 py-2"
               required>
        <label for="stock" class="block font-medium mb-1">Stock</label>
        <input type="text" name="stock" id="stock"
               value="{{ old('stock' , $product->stock) }}"
               class="w-full border rounded px-3 py-2"
               required>
        <select name="status" id="status" class="w-full border rounded px-3 py-2">
            <option value="disponible" {{ old('status') == 'disponible' ? 'selected' : '' }}>
                Disponible
            </option>
            <option value="indisponible" {{ old('status') == 'indisponible' ? 'selected' : '' }}>
                Indisponible
            </option>
        </select>





        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">
            Mettre à jour
        </button>


    </div>



</form>




    <div>
          <form action="{{ route('products.destroy', $product->id) }}" method="POST"
            onsubmit="return confirm('Êtes-vous sûr ?')">

                @csrf
                @method('DELETE')

                 <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">
                     Supprimer
                 </button>
          </form>

    </div>




@endsection

