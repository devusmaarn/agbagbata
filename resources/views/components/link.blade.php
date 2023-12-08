@props(['text' => ''])

<a {{ $attributes }} class="btn btn-sm btn-primary" wire:navigate>
    {{ $slot ?? $text }}
</a>