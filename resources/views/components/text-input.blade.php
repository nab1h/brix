@props(['disabled' => false])

<input
    @disabled($disabled)
    {{ $attributes->merge([
        'class' => 'w-full rounded-lg border border-gray-300 bg-white px-3 py-2 text-gray-900 placeholder-gray-400 shadow-sm transition-colors duration-150 focus:outline-none focus:ring-1 focus:ring-[#6F8F7A] focus:border-[#6F8F7A] disabled:opacity-50 disabled:cursor-not-allowed'
    ]) }}>
