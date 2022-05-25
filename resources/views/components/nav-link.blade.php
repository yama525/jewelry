@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex my-0 mx-auto px-2 md:px-4 py-1 border-b-2 border-gray-400 font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'inline-flex my-0 mx-auto px-2 md:px-4 py-1 border-b-2 border-transparent font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
