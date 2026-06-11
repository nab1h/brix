@extends('layouts.brix')
@section('title', 'أعمال مع '. $brand->name)
@section('hero_image', asset(Storage::url($brand->image)))

@section('content')
<div class="bg-gradient-to-b from-cream/30 to-white min-h-screen" dir="rtl">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="grid grid-cols-1 lg:grid-cols-[280px_1fr] gap-8">

            {{-- Sidebar: شركاؤنا --}}
            <aside class="lg:sticky lg:top-24 lg:self-start reveal">
                <div class="bg-white rounded-2xl shadow-sm border border-sand/40 overflow-hidden">
                    <div class="px-5 py-4 bg-gradient-to-l from-terracotta to-terracotta/80">
                        <h3 class="text-white font-bold text-lg flex items-center gap-2">
                            <i class="fas fa-handshake"></i> شركاؤنا
                        </h3>
                    </div>
                    <nav class="max-h-[70vh] overflow-y-auto divide-y divide-sand/30">
                        @foreach($allBrands as $item)
                        <a href="{{ route('brand.show', $item->slug) }}"
                            class="flex items-center gap-3 p-3 transition-all duration-300 group
                                      {{ $item->id === $brand->id ? 'bg-cream border-r-4 border-terracotta' : 'hover:bg-cream/50 hover:pr-5' }}">
                            @if($item->image)
                            <img src="{{ Storage::url($item->image) }}" alt="{{ $item->name }}"
                                class="w-10 h-10 rounded-lg object-contain bg-white p-1 border border-sand/30 shrink-0">
                            @else
                            <div class="w-10 h-10 rounded-lg bg-sand/40 flex items-center justify-center shrink-0">
                                <i class="fas fa-building text-warm-400 text-sm"></i>
                            </div>
                            @endif
                            <span class="font-bold text-sm truncate
                                             {{ $item->id === $brand->id ? 'text-terracotta' : 'text-warm-700 group-hover:text-terracotta' }}">
                                {{ $item->name }}
                            </span>
                            @if($item->id === $brand->id)
                            <i class="fas fa-chevron-left text-terracotta text-xs mr-auto"></i>
                            @endif
                        </a>
                        @endforeach
                    </nav>
                </div>
            </aside>

            {{-- Main --}}
            <main class="space-y-10">

                {{-- بطاقة البراند --}}
                <section class="reveal bg-white rounded-3xl shadow-sm border border-sand/40 overflow-hidden">
                    <div class="h-24 bg-gradient-to-l from-terracotta/15 via-cream to-sand/30"></div>
                    <div class="px-6 md:px-10 pb-8 -mt-16">
                        <div class="flex flex-col md:flex-row md:items-end gap-6">
                            @if($brand->image)
                            <img src="{{ Storage::url($brand->image) }}" alt="{{ $brand->name }}"
                                class="w-28 h-28 md:w-36 md:h-36 rounded-2xl object-cover bg-white shadow-lg p-2 border border-sand/40 shrink-0">
                            @else
                            <div class="w-28 h-28 md:w-36 md:h-36 rounded-2xl bg-cream flex items-center justify-center shadow-lg border border-sand/40 shrink-0">
                                <i class="fas fa-image text-warm-400 text-4xl"></i>
                            </div>
                            @endif

                            <div class="flex-1 md:pb-2">
                                <h1 class="text-3xl md:text-4xl font-extrabold text-warm-800 mb-3">{{ $brand->name }}</h1>
                                <div class="flex flex-wrap gap-2">
                                    @if($brand->years)
                                    <span class="inline-flex items-center gap-1.5 bg-cream border border-sand text-warm-600 text-xs px-4 py-1.5 rounded-full font-semibold">
                                        <i class="fas fa-calendar-alt text-terracotta"></i> {{ $brand->years }}
                                    </span>
                                    @endif
                                    @if($brand->url)
                                    <a href="{{ $brand->url }}" target="_blank" rel="noopener"
                                        class="inline-flex items-center gap-1.5 bg-terracotta hover:bg-terracotta/90 text-white text-xs px-4 py-1.5 rounded-full font-semibold transition-all hover:shadow-md hover:-translate-y-0.5">
                                        زيارة الموقع <i class="fas fa-external-link-alt text-[10px]"></i>
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>

                        @if($brand->info)
                        <p class="mt-6 text-warm-600 leading-relaxed text-base md:text-lg border-t border-sand/30 pt-6">
                            {{ $brand->info }}
                        </p>
                        @endif
                    </div>
                </section>

                {{-- عنوان قسم الأعمال --}}
                <div class="reveal flex items-center gap-4">
                    <div class="h-px flex-1 bg-gradient-to-l from-sand to-transparent"></div>
                    <h2 class="text-2xl md:text-3xl font-extrabold text-warm-800 text-center">
                        أعمالنا مع <span class="text-terracotta">{{ $brand->name }}</span>
                    </h2>
                    <div class="h-px flex-1 bg-gradient-to-r from-sand to-transparent"></div>
                </div>

                {{-- الأعمال --}}
                @if($brand->portfolios->count() > 0)
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($brand->portfolios as $portfolio)
                    <div class="reveal group relative bg-white rounded-2xl overflow-hidden shadow-sm border border-sand/40 hover:shadow-xl hover:-translate-y-1 transition-all duration-500">
                        <div class="aspect-[4/3] overflow-hidden bg-cream relative">
                            @if($portfolio->image)
                            <img src="{{ Storage::url($portfolio->image) }}"
                                alt="{{ $portfolio->name }}"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                            @else
                            <div class="w-full h-full flex items-center justify-center text-warm-400">
                                لا توجد صورة
                            </div>
                            @endif

                            <div class="absolute inset-0 bg-gradient-to-t from-warm-900/70 via-warm-900/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-10"></div>
                        </div>
                        <div class="p-5">
                            <span class="inline-block bg-cream text-terracotta text-[11px] font-bold px-3 py-1 rounded-full mb-2 border border-sand/40">
                                {{ $portfolio->category->name ?? 'غير مصنف' }}
                            </span>
                            <h3 class="font-bold text-warm-800 text-lg group-hover:text-terracotta transition-colors line-clamp-2">
                                {{ $portfolio->name }}
                            </h3>
                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                <div class="reveal text-center py-16 bg-white rounded-2xl border border-dashed border-sand">
                    <div class="w-20 h-20 mx-auto rounded-full bg-cream flex items-center justify-center mb-4">
                        <i class="fas fa-folder-open text-terracotta text-3xl"></i>
                    </div>
                    <p class="text-warm-600 text-lg font-semibold">لا توجد أعمال مسجلة لهذا البراند حالياً.</p>
                    <p class="text-warm-400 text-sm mt-2">تابعنا لمشاهدة أحدث أعمالنا قريباً.</p>
                </div>
                @endif

            </main>
        </div>
    </div>
</div>

<style>
    .reveal {
        opacity: 0;
        transform: translateY(24px);
        transition: opacity .7s ease, transform .7s ease;
    }

    .reveal.active {
        opacity: 1;
        transform: translateY(0);
    }
</style>

<script>
    window.addEventListener('scroll', function() {
        let reveals = document.querySelectorAll('.reveal');
        for (let i = 0; i < reveals.length; i++) {
            let windowHeight = window.innerHeight;
            let elementTop = reveals[i].getBoundingClientRect().top;
            let elementVisible = 100;
            if (elementTop < windowHeight - elementVisible) {
                reveals[i].classList.add('active');
            }
        }
    });
    window.dispatchEvent(new Event('scroll'));
</script>

<!-- CTA -->
@include('includes.cta')
@endsection
