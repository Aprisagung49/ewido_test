@php
    $classes = 'mt-2 mb-1 text-pretty text-center text-2xl font-semibold tracking-tight sm:text-3xl text-dark';
@endphp

<h2 {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</h2>
