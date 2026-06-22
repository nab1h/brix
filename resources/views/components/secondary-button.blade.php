<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-lg font-bold text-sm text-gray-700 uppercase tracking-widest hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-[#6F8F7A] focus:ring-offset-2 focus:ring-offset-white disabled:opacity-40 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
