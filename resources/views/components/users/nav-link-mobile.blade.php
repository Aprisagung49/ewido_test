@props(['active' => false])

<a {{ $attributes }}
    class="{{ $active ? 'text-green-500' : 'text-blue-900' }} -mx-3 block rounded-lg px-3 py-2 font-semibold  hover:bg-gray-50">{{ $slot }}</a>
