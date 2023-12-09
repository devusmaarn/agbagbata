@props(['label' => '', 'name'])

<label class="form-control w-full max-w-xs">
  <div class="label">
    <span class="label-text-alt">{{$label}}</span>
  </div>
  <select name="{{$name}}" class="select select-bordered @error($name) select-error @enderror">
    {{ $slot }}
  </select>
  <div class="label">
    <x-forms.error error='{{ $name }}' />
  </div>
</label>