<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

@extends('layouts.app')


@section('content')

<h1>{{ $product->name}} </h1>
<p> Stock : {{$product->stock }} </p>
<p>{{ $product->price}} €</p>


@endsection

</body>
</html>
