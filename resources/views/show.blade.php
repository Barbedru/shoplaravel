<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>{{ $product['name']}} </hi>
<p> Stock : {{$product['stock'] }} </p>
<p>{{ $product['etat'] }} </p>


 @if($product['stock'] > 5)
    <span class="text-green-500">En stock</span>
@elseif($product['stock'] > 0)
    <span class="text-orange-500">Stock limité</span>
@else
    <span class="text-red-500">Rupture de stock</span>
@endif



</body>
</html>