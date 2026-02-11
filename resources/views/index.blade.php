
@extends('layouts.app')


@section('content')

    <h1>Catégories :</h1>

    <label for="category_id">Catégorie </label>
    <select name="category_id" id="category_id" required>
        <option value="">-- Choisir une catégorie --</option>
        @foreach($categories as $category)
            <li><a href="{{ route('category.show') }}">{{ $category->product->name}}</a> - {{$product->name}} - {{ $product->price}} €</li>
        @endforeach
    </select>



@endsection
