<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CraftPaint</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<header class="bg-gray-800 text-white py-4">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-xl font-bold">CraftPaint</h1>
        <nav>
            <ul class="flex space-x-4">
                <li><a href="/" class="hover:text-gray-300">Accueil</a></li>
                <li><a href="#" class="hover:text-gray-300">Profile</a></li>
                <li><a href="#" class="hover:text-gray-300">Deconnexion</a></li>
            </ul>
        </nav>
    </div>
</header>

<body>
    @yield('content')
</body>
<footer>
    <p class="text-center text-gray-500 text-sm py-4">© 2026 CraftPaint. Tout droit réservés.</p>
</footer>
</html>