@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-lime-800 
            text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-lime-700 
            transition'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm
             font-medium leading-5 text-gray-500 hover:text-green-700 hover:border-green-700 
             focus:outline-none focus:text-green-700 focus:border-green-300 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
