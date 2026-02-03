<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h1>{{ $products['id']}} </hi>
<p>{{$products['name'] }} </p>
<p>Prix {{ $products['price'] }} € </p>

<ul>
    @foreach($products as $product)
        <li>{{ $product['name'] }} - {{ $product['price'] }} €</li>
    @endforeach
</ul>

<!-- Avec index -->
@foreach($products as $index => $product)
    <p>{{ $index + 1 }}. {{ $product['name'] }}</p>
@endforeach

</body>
</html>