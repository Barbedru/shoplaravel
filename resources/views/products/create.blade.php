<?php

@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Nouveau produit</h1>

    <form action="{{ route('products.store') }}" method="POST" class="max-w-lg">
        @csrf

        <div class="mb-4">
            <label for="name" class="block font-medium mb-1">Nom</label>
            <input type="text" name="name" id="name"
                   value="{{ old('name') }}"
                   class="w-full border rounded px-3 py-2"
                   required>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
            Créer le produit
        </button>
    </form>
@endsection
