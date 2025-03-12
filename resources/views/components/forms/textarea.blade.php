@props(['label', 'name'])

@php
  $defaults = [
    'id' => $name,
    'name' => $name,
    'rows' => 3,
    'class' => 'block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6',
    'value' => old($name)
  ];
@endphp

<x-forms.field :$label :$name>
    <textarea {{ $attributes($defaults) }}></textarea>
</x-forms.field>