<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="flex min-h-screen bg-gray-100">

    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-md">
        <div class="p-4 font-bold text-lg">
            {{ config('app.name') }}
        </div>
        <nav class="mt-6">
            <ul class="space-y-2">
                <li><a href="/" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Accueil</a></li>
                <li><a href="/dashboard" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Dashboard</a></li>
                <li><a href="/settings" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Paramètres</a></li>
            </ul>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6">
        {{ $slot }}
    </main>

    @livewireScripts
</body>
</html>
