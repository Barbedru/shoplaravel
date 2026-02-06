<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

@extends('layouts.app')

@section('title', 'Produits - ShopLaravel')


@section('content')

<h1 class="text-3xl font-bold mb-4">Nos produits</h1>
<p>Découvrez nos produits exceptionnels !</p>

<ul>
    @foreach($products as $product)
        <li>{{ $product->name}} - {{ $product->price}} €</li>
    @endforeach
</ul>

@endsection

</body>
</html>
