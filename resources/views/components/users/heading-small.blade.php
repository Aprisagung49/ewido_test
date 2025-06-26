@php
    $classes = 'mt-16 text-pretty text-center text-2xl font-semibold tracking-tight sm:text-4xl text-gold';
@endphp

<h2 {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</h2>
