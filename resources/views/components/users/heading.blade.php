@php
    $classes = 'mt-16 lg:mt-2 text-pretty text-center text-5xl font-semibold tracking-tight sm:text-7xl text-gold';
@endphp

<h2 {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</h2>
