<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- CSRF Token voor beveiliging --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Pagina Titel --}}
    <title>@yield('page_title') | {{ config('app.name', 'MA-Site') }}</title>

    {{-- Vite Assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-100 dark:bg-gray-900">
    <div class="min-h-screen">

        {{-- Pagina Header (optioneel) --}}
        @hasSection('header')
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    @yield('header')
                </div>
            </header>
        @endif

        {{-- Pagina Content --}}
        <main class="bg-red-500">
        {{ $slot }}
         </main>
    </div>

    {{-- Footer & Scripts --}}
    @include('layouts.partials.footer')
    @include('layouts.partials.scripts')
</body>
</html>
