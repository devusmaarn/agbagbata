
@props(['name', 'label', 'placeholder', 'value' => ''])

<div class="form-control">
    <label class="label">
        <span class="label-text">{{$label}}</span>
    </label>
    <textarea name="{{ $name }}" placeholder="{{ $placeholder ?? $label }}" 
        class="textarea textarea-bordered @error($name) textarea-error @enderror" {{ $attributes }}>{{$value}}</textarea>
    <x-forms.error error='{{ $name }}' />
</div>