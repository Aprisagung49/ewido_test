@props(['active' => false])

<a class="{{ $active ? 'text-yellow-500 font-semibold' : 'main-nav-link text-sm/6 font-semibold text-gray-900 hover:text-yellow-500' }}"
    {{ $attributes }}>{{ $slot }}</a>
