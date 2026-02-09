<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ShopLaravel')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <header class="bg-blue-600 text-white p-4">
        <nav class="container mx-auto">
            <a href="{{ route('home') }}" class="font-bold text-xl">ShopLaravel</a>
            <a href="{{ route('products.index') }}" class="ml-4">Produits</a>
            <a href="{{ route('about') }}" class="ml-4">À propos</a>
            <a href="{{ route('contact') }}" class="ml-4">Contact</a>
        </nav>
    </header>

    <main class="container mx-auto py-8">

        @if(session('success'))
            <div style="padding: 15px; margin: 10px; background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 5px;">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div style="padding: 15px; margin: 10px; background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; border-radius: 5px;">
                {{ session('error') }}
            </div>
        @endif

         @yield('content')

    </main>



    <footer class="bg-gray-800 text-white p-4 mt-8">
        <div class="container mx-auto text-center">
            &copy; {{ date('Y') }} ShopLaravel - Tous droits réservés
        </div>
    </footer>
</body>
</html>
