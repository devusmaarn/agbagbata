@props(['text' => '', 'href' => '#'])

<a {{ $attributes->merge(['class' => '']) }} href="{{$href}}"  wire:navigate>
    {{ $text }}
</a>