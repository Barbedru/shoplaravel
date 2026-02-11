

@extends('layouts.app')


@section('content')

<h1>{{ $product->name}} </h1>
<p> Stock : {{$product->stock }} </p>
<p>{{ $product->price}} €</p>


@endsection

