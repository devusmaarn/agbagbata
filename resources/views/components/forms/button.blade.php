@props(['label'])

<div class="form-control mt-6">
    <button type="submit" class="btn btn-primary">
        {{$label}} <span class="loading loading-bars" wire:loading></span>
    </button>
</div>