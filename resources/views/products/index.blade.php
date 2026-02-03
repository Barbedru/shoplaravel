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
        <li>{{ $product['name'] }} - {{ $product['price'] }} €</li>
    @endforeach
</ul>

<br>

<h3>Avec index</h3> 
@foreach($products as $index => $product)
    <p>{{ $index + 1 }}. {{ $product['name'] }}</p>
@endforeach

<br>

<h3>Cas vide</h3>
@forelse($products as $product)
    <p>{{ $product['name'] }}</p>
@empty
    <p>Aucun produit trouvé.</p>
@endforelse

<br>

<h3>Variable @loop</h3>
@foreach($products as $product)
    @if($loop->first)
        <p>Premier produit !</p>
    @endif 

     <p>{{ $loop->count }}. {{ $product['name'] }}</p>

    @if($loop->last)
        <p>Dernier produit !</p>
    @endif  
@endforeach
@endsection


</body>
</html>