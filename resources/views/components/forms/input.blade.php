
@props(['name', 'label', 'placeholder', 'type' => 'text'])

<div class="form-control">
    <label class="label">
        <span class="label-text">{{$label}}</span>
    </label>
    <input type="{{$type}}" name="{{ $name }}" placeholder="{{ $placeholder ?? $label }}" 
        class="input input-bordered @error($name) input-error @enderror" {{ $attributes }} />
    <x-forms.error error='{{ $name }}' />
</div>