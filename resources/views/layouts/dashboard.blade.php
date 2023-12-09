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
        <x-layouts.navbar layout='dashboard' />
        <div class="drawer lg:drawer-open">
            <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
            <div class="drawer-content p-5 md:p-10 max-w-6xl">
                @if (session()->has('message'))
                    <div class="alert alert-info mb-5 mt-2">
                        <span>{{ session('message') }}</span>
                    </div>
                @endif
                {{ $slot }}
            </div> 
            <div class="drawer-side">
                <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label> 
                <ul class="menu p-4 w-60 min-h-full bg-base-200 text-base-content">
                    <li><x-link :href="route('project.index')" text='Projects' /></li>
                    <li><a>Members</a></li>
                </ul>
            </div>
        </div>
        <x-layouts.footer />

        @livewireScripts
    </body>
</html>

