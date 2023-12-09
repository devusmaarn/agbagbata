<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Agbagbata' }}</title>
        @vite('resources/css/app.css')
         @livewireStyles
    </head>
    <body>
        <x-layouts.navbar layout='app' />
        <main>
            {{ $slot }}
        </main>
        <x-layouts.footer />
        
        @livewireScripts
    </body>
</html>
