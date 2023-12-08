@props(['error'])

@error($error)
    <p {{ $attributes->merge(['class' => 'text-error text-sm font-medium']) }}>
        {{ $message }}
    </p>
@enderror