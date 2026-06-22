@props(['active'])

@php
$classes = ($active ?? false)
? 'inline-flex items-center px-1 pt-1 border-b-2 border-[#6F8F7A] text-sm font-bold leading-5 text-[#6F8F7A] focus:outline-none transition duration-300 ease-in-out'
: 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-600 hover:text-[#6F8F7A] hover:border-[#6F8F7A] focus:outline-none focus:text-[#6F8F7A] focus:border-[#6F8F7A] transition duration-300 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
