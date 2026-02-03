<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<ul>
    @foreach($products as $product)
        <li>{{ $product['name'] }} - {{ $product['price'] }} €</li>
    @endforeach
</ul>

<br>

Avec index 
@foreach($products as $index => $product)
    <p>{{ $index + 1 }}. {{ $product['name'] }}</p>
@endforeach

<br>
Cas vide
@forelse($products as $product)
    <p>{{ $product['name'] }}</p>
@empty
    <p>Aucun produit trouvé.</p>
@endforelse

</body>
</html>