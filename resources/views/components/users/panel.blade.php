@props(['color' => 'white'])

@php
    if ($color === 'gray') {
        $class = 'bg-background';
    }

    if ($color === 'white') {
        $class = 'bg-white';
    }

@endphp

<div class="{{ $class }}" {{ $attributes }}>
    {{ $slot }}
</div>
