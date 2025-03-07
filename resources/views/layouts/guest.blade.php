<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0 bg-gradient-to-r from-indigo-600 to-purple-600">
            <div class="w-full sm:max-w-md mt-10 sm:mt-20 px-6 py-4 bg-white shadow-2xl overflow-hidden sm:rounded-xl">
                <div class="mb-6 flex justify-center">
                    <a href="/" class="flex flex-col items-center">
                        <x-application-logo class="w-20 h-20 fill-current text-indigo-600" />
                        <span class="mt-2 text-xl font-bold text-gray-900">{{ config('app.name', 'Laravel') }}</span>
                    </a>
                </div>

                <div class="px-4 py-2">
                    {{ $slot }}
                </div>
            </div>
            
            <!-- Footer for guest layout -->
            <div class="mt-8 text-center text-white text-sm opacity-80">
                &copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.
            </div>
        </div>
    </body>
</html>