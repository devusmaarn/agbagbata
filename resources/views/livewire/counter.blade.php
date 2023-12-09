<div class="flex w-screen h-screen items-center justify-center gap-5">
    
    <button wire:click="increment" class="px-2 bg-green-500">+</button>
    <h1 class="text-xl">{{ $count }}</h1> 
    <button wire:click="decrement" class="px-2 bg-green-500">-</button>
</div>
