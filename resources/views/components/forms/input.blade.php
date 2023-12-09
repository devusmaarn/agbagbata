
@props(['name', 'label' => '', 'placeholder', 'type' => 'text'])

<div class="form-control">
    @if ($type === 'checkbox')
        <div class="flex items-center gap-2 mt-4">
            <input type="checkbox" checked="checked" class="checkbox" />
            <label class="label">
                <span class="label-text">{{$label}}</span>
            </label>
        </div>
    @else
        <label class="label">
            <span class="label-text">{{$label}}</span>
        </label>
        <input type="{{$type}}" name="{{ $name }}" placeholder="{{ $placeholder ?? $label }}" 
            class="input input-bordered text-sm @error($name) input-error @enderror" 
            {{ $attributes->merge(['class']) }} />
    @endif
    <x-forms.error error='{{ $name }}' />
</div>