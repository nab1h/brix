<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-[#6F8F7A] border border-transparent rounded-lg font-bold text-sm text-white uppercase tracking-widest hover:bg-[#587061] focus:outline-none focus:ring-2 focus:ring-[#6F8F7A] focus:ring-offset-2 focus:ring-offset-white disabled:opacity-40 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
