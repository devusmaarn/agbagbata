<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Agbagbata' }}</title>
        @livewireStyles
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <x-layouts.navbar layout='app' />
        <main class="max-w-6xl mx-auto p-5">
            {{ $slot }}
        </main>
        <x-layouts.footer />
        @livewireScriptConfig
    </body>
</html>
