<section class="py-20 md:py-24 relative overflow-hidden">
    <div class="absolute inset-0">
        <img src="cta.jpg" alt="" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-primary/70"></div>
    </div>
    <div class="max-w-3xl mx-auto px-6 md:px-12 text-center relative z-10">
        <div class="reveal">
            <h2 class="font-serif text-3xl md:text-5xl font-bold text-ivory mb-6 leading-[1.2]">جاهز لبدء<br>مشروعك القادم؟</h2>
            <p class="text-warm-300 text-lg mb-10 leading-relaxed">تواصل معنا اليوم واحصل على استشارة مجانية وعرض سعر مخصص</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="{{ route('quote') }}" class="group inline-flex items-center gap-3 px-8 py-4 bg-white text-warm-800 font-semibold rounded-xl hover:bg-cream transition-all duration-300">
                    اطلب عرض سعر
                    <span class="w-8 h-8 rounded-full bg-white/20 flex items-center justify-center group-hover:-translate-x-1 transition-transform"><i class="fas fa-arrow-left text-xs"></i></span>
                </a>
                <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-8 py-4 border border-white/60 text-ivory font-semibold rounded-xl hover:bg-white/10 transition-all duration-300">تواصل معنا</a>
            </div>
        </div>
    </div>
</section>
