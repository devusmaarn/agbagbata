@props(['label'])

<div class="mt-4">
    <button type="submit" {{ $attributes->merge(['class' => 'btn btn-primary']) }}>
        {{$label}} <span class="loading loading-bars" wire:loading></span>
    </button>
</div>