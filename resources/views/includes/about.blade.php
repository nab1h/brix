
    <section id="about" class="py-24 md:py-40">
        <div class="max-w-[1400px] mx-auto px-6 md:px-12">
            <div class="grid lg:grid-cols-2 gap-16 md:gap-24 items-center">
                @php
                $image = ($galleryImages && $galleryImages->first()?->path)
                ? asset('storage/' . $galleryImages->first()->path)
    : 'https://picsum.photos/seed/brix-workshop/800/1000.jpg';
    @endphp

    <div class="reveal img-reveal rounded-2xl overflow-hidden">
        <img src="{{ $image }}" alt="ورشة العمل" class="w-full aspect-[4/5] object-cover">
    </div>
    <div>
        <div class="reveal"><span class="text-terracotta text-sm font-bold tracking-[0.15em]">فلسفتنا</span></div>
        <h2 class="reveal reveal-delay-1 font-serif text-3xl md:text-5xl font-bold leading-[1.2] text-warm-900 mt-4 mb-8">{!! highlightWord(" $content->about_title_ar ", -2) !!}</h2>
        <p class="reveal reveal-delay-2 text-warm-500 text-lg leading-[1.9] mb-6">{{ $content->about_desc_ar }}</p>
        <div class="reveal reveal-delay-4 flex gap-12">
            @forelse($stats as $index => $item)
            <div><span class="text-4xl font-serif font-bold text-terracotta counter-num" data-target="{{ $item->number }}">0</span><span class="block text-sm text-warm-400 mt-1">{{ $item->title_ar }}</span></div>
            @empty
            @endforelse
        </div>
    </div>
    </div>
    </div>
    </section>
