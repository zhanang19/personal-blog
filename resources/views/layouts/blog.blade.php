<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            <div class="container mx-auto max-w-4xl px-6 py-6">
                <nav class="flex justify-between items-center">
                    <a href="/" class="inline-flex items-center p-2 rounded-md font-semibold text-xs text-gray-800 uppercase tracking-widest focus:outline-none focus:border-gray-100 focus:ring ring-gray-500">
                        <h1>Zainal Hasan</h1>
                    </a>
                    <div class="space-x-3">
                        <a href="#" class="inline-flex items-center px-4 py-2 bg-gray-100 border border-transparent rounded-md font-semibold text-xs text-gray-800 uppercase tracking-widest hover:bg-gray-300 active:bg-gray-100 focus:outline-none focus:border-gray-100 focus:ring ring-gray-500 disabled:opacity-25 transition ease-in-out duration-150">Blog</a>
                        <a href="#" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">Contact</a>
                    </div>
                </nav>

                {{ $slot }}
            </div>
        </div>
    </body>
</html>
