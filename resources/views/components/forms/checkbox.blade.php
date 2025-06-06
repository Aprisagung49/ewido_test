@props(['label', 'name', 'id'])

@php
  $classes = 'col-start-1 row-start-1 appearance-none rounded-sm border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto';

  $defaults = [
    'type' => 'checkbox',
    'id' => $id,
    'name' => $name,
    'value' => old($name)
  ];
@endphp

<div class="flex items-center gap-x-3">
  <input {{ $attributes->merge($defaults) }} class="{{ $classes }}">
  <label for="{{ $id }}">{{ $label }}</label>
</div>