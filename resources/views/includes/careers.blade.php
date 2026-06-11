<section id="careers" class="py-24 md:py-40 relative overflow-hidden">
    <!-- Dark Background -->
    <div class="absolute inset-0">
        <img src="careres.jpg" alt="" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-warm-600/80"></div>
        <div class="absolute inset-0 bg-gradient-to-br from-brand-blue/20 via-transparent to-terracotta/10"></div>
    </div>

    <div class="max-w-[1400px] mx-auto px-6 md:px-12 relative z-10">
        <div class="text-center mb-20">
            <span class="reveal text-terracotta text-sm font-bold tracking-[0.15em]">التوظيف</span>
            <h2 class="reveal reveal-delay-1 font-serif text-3xl md:text-5xl font-bold text-ivory mt-4">انضم لفريق <span class="text-terracotta">Brix</span></h2>
            <p class="reveal reveal-delay-2 text-warm-300 text-lg mt-4 max-w-xl mx-auto">نبحث دائماً عن مواهب شغوفة تنضم لرحلتنا الإبداعية</p>
        </div>

        <div class="grid md:grid-cols-2 gap-6 max-w-5xl mx-auto">

            @foreach ($careers as $career)
            <div class="reveal card-lift group">
                <div class="bg-white/[0.06] backdrop-blur-2xl border border-white/[0.08] rounded-3xl p-6 md:p-8 hover:border-terracotta/30 hover:bg-white/[0.09] transition-all duration-500 h-full flex flex-col shadow-2xl">
                    <!-- Header Tags -->
                    <div class="flex items-center gap-2 mb-5">
                        <span class="px-3 py-1.5 rounded-lg bg-olive-400/15 text-olive-200 text-[11px] font-bold tracking-wide backdrop-blur-sm">{{ $career->depart }}</span>
                        <span class="px-3 py-1.5 rounded-lg bg-terracotta/20 text-terracotta text-[11px] font-bold tracking-wide backdrop-blur-sm">دوام كامل</span>
                    </div>
                    <!-- Title -->
                    <h3 class="font-serif text-2xl font-bold text-ivory mb-3 group-hover:text-terracotta transition-colors">{{ $career->name }}</h3>
                    <!-- Description -->
                    <p class="text-sm text-warm-300 leading-relaxed mb-6 flex-grow">{{ $career->description }}</p>
                    <!-- Meta -->
                    <div class="flex items-center gap-5 text-xs text-warm-400 mb-6">
                        <div class="flex items-center gap-1.5"><i class="fas fa-map-marker-alt text-terracotta/70"></i>{{ $career->location }}</div>
                        <div class="flex items-center gap-1.5"><i class="fas fa-briefcase text-olive-400/70"></i>{{ $career->experience }}</div>
                    </div>
                    <!-- Employee Cell -->
                    <div class="border-t border-white/[0.06] pt-5">
                        <div class="flex items-center justify-between">
                            <a href="#quote" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-terracotta text-ivory text-xs font-bold hover:bg-ivory hover:text-warm-800 transition-all duration-300 group/btn">
                                قدم الآن <i class="fas fa-arrow-left text-[10px] group-hover/btn:-translate-x-0.5 transition-transform"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Bottom CTA -->
        <div class="reveal text-center mt-14">
            <p class="text-warm-300 text-sm mb-5">لم تجد الوظيفة المناسبة؟ أرسل سيرتك الذاتية وسنتواصل معك عند توفر فرصة</p>
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-8 py-3.5 border-2 border-white/15 text-warm-200 font-bold rounded-full hover:border-terracotta hover:text-terracotta transition-all duration-400">
                <i class="fas fa-envelope text-sm"></i> أرسل سيرتك الذاتية
            </a>
        </div>
    </div>
</section>
