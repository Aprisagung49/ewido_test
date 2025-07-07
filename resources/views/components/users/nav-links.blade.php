@props(['active' => false])

<a class="{{ $active ? 'text-gold font-semibold' : 'main-nav-link text-sm/6 font-semibold text-gray-900 hover:text-gold' }}"
    {{ $attributes }}>{{ $slot }}</a>
