
@extends('layouts.app')


@section('content')

    <h1 class="text-3xl font-bold mb-4">Catégories</h1>


    @foreach($categories as $category)
        @if($category)
            <li>
                <a href="{{ route('category.show', $category) }}">
                    {{ $category->name }}
                </a>

            </li>
        @endif
    @endforeach




@endsection
