@extends('layouts.app')

@section('title', 'Panier')

@section('content')

    <h1><strong>Panier :</strong></h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <div class="container" style="padding: 20px;">

        @php
            $cart = session('cart', []);
            $total = 0;
        @endphp

        @if(count($cart) > 0)
            <div style="display: flex; flex-direction: column; gap: 20px;">

                @foreach($cart as $id => $item)
                    @php
                        $subtotal = $item['price'] * $item['quantity'];
                        $total += $subtotal;
                    @endphp

                    <div style="display: flex; align-items: center; border: 1px solid #ddd; border-radius: 8px; padding: 15px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                        <div style="flex: 1;">
                            <h5 style="margin: 0 0 5px 0;">{{ $item['name'] }}</h5>
                            <p style="margin: 5px 0 0 0; color: #0d6efd; font-weight: bold;">
                                {{ number_format($item['price'], 2) }} € × {{ $item['quantity'] }}
                            </p>
                            <p style="margin: 5px 0 0 0; font-weight: bold;">
                                Sous-total: {{ number_format($subtotal, 2) }} €
                            </p>
                        </div>

                        <div style="display: flex; gap: 10px; align-items: center;">
                            <!-- Formulaire pour modifier la quantité -->
                            <form action="{{ route('cart.update', $id) }}" method="POST" style="display: flex; gap: 5px;">
                                @csrf
                                @method('PATCH')
                                <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1" class="form-control" style="width: 80px;">
                                <button type="submit" class="btn btn-sm btn-warning">Modifier</button>
                            </form>

                        </div>

                        <div style="display: flex; gap: 10px; align-items: center;">
                            <!-- Formulaire pour supprimer un article du panier -->
                            <form action="{{ route('cart.remove', $id) }}" method="POST" style="display: flex; gap: 5px;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-warning">Supprimer</button>
                            </form>

                        </div>

                    </div>
                @endforeach

                <div style="text-align: right; margin-top: 20px; padding: 15px; background-color: #f8f9fa; border-radius: 8px;">
                    <h3>Total: {{ number_format($total, 2) }} €</h3>

                    <form action="{{ route('cart.destroy', $id) }}" method="POST" style="display: inline-block; margin-top: 10px;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir vider le panier ?')">
                            Vider le panier
                        </button>
                    </form>

                    <a href="{{ route('products.index') }}" class="btn btn-secondary" style="margin-left: 10px;">
                        Continuer mes achats
                    </a>
                </div>
            </div>
        @else
            <p>Votre panier est vide.</p>
            <a href="{{ route('products.index') }}" class="btn btn-primary">Voir les produits</a>
        @endif

    </div>

@endsection
