@props(['active'])

@php
$classes = ($active ?? false)
? 'block w-full ps-3 pe-4 py-2 border-l-4 border-[#6F8F7A] text-start text-base font-bold text-[#6F8F7A] bg-[#6F8F7A]/10 focus:outline-none focus:bg-[#6F8F7A]/20 transition duration-300 ease-in-out'
: 'block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-gray-600 hover:text-[#6F8F7A] hover:bg-gray-50 hover:border-[#6F8F7A]/50 focus:outline-none focus:text-[#6F8F7A] focus:bg-gray-50 focus:border-[#6F8F7A]/50 transition duration-300 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
