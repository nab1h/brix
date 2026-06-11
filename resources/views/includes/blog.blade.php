<section class="py-20 md:py-28 bg-warm-50/30">
    <!-- تم توحيد الـ Container ليلف العنوان والمحتوى -->
    <div class="max-w-[1400px] mx-auto px-6 md:px-12">

        <!-- Header Section -->
        <div class="flex flex-col md:flex-row items-start md:items-end justify-between gap-6 mb-16">
            <div>
                <span class="reveal text-terracotta text-sm font-bold tracking-[0.2em] flex items-center gap-3">
                    <span class="w-8 h-[2px] bg-terracotta inline-block"></span> المدونة
                </span>
                <h2 class="reveal reveal-delay-1 font-serif text-3xl md:text-5xl font-bold text-warm-900 mt-4 leading-tight">
                    قراءات <span class="text-terracotta italic">إبداعية</span>
                </h2>
            </div>
            <p class="reveal reveal-delay-2 text-warm-500 max-w-sm text-base md:text-lg leading-relaxed md:text-right">
                اكتشف أحدث المقالات والأفكار التي تلهب الإبداع وتثري المخيلة.
            </p>
        </div>

        @if($articles->count() > 0)
        <!-- Articles Grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($articles as $article)

            <a href="{{ route('articles.show', $article) }}" class="reveal group block bg-white border border-sand/50 rounded-2xl overflow-hidden shadow-sm transition-all duration-500 hover:shadow-2xl hover:-translate-y-2 hover:border-terracotta/20">

                <!-- Image Container -->
                <div class="relative aspect-video overflow-hidden">
                    <img src="{{ $article->image ? Storage::url($article->image) : 'https://picsum.photos/seed/article-default/800/450.jpg' }}"
                        alt="{{ $article->title }}"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">

                    <!-- Overlay على الصورة عند التمرير -->
                    <div class="absolute inset-0 bg-gradient-to-t from-warm-900/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                </div>

                <!-- Content Container -->
                <div class="p-6">
                    <!-- Date -->
                    <span class="text-warm-300 text-xs font-medium flex items-center gap-1.5">
                        <i class="far fa-calendar-alt text-[10px]"></i>
                        {{ $article->created_at->format('d M Y') }}
                    </span>

                    <!-- Title -->
                    <h3 class="font-serif text-xl font-bold text-warm-900 mt-3 mb-3 group-hover:text-terracotta transition-colors duration-300 line-clamp-2 min-h-[3.5rem]">
                        {{ $article->title }}
                    </h3>

                    <!-- Snippet -->
                    <p class="text-warm-400 text-sm leading-relaxed line-clamp-3">
                        {{ \Illuminate\Support\Str::limit(strip_tags($article->content), 120) }}
                    </p>

                    <!-- Read More (تصميم جديد ومتفاعل) -->
                    <div class="mt-6 pt-4 border-t border-sand/50 flex items-center justify-between">
                        <span class="text-terracotta font-semibold text-sm">اقرأ المزيد</span>
                        <span class="w-8 h-8 rounded-full border border-terracotta/30 flex items-center justify-center text-terracotta group-hover:bg-terracotta group-hover:text-white group-hover:border-terracotta transition-all duration-300">
                            <i class="fas fa-arrow-left text-xs transform group-hover:-translate-x-0.5 transition-transform"></i>
                        </span>
                    </div>
                </div>
            </a>

            @endforeach
        </div>

        <div class="mt-16 flex justify-center">
            <div class="flex items-center gap-2">
                {{ $articles->onEachSide(1)->links() }}
            </div>
        </div>

        @else
        <div class="text-center py-20 px-6 bg-white rounded-2xl border border-sand/50">
            <div class="w-20 h-20 mx-auto mb-6 rounded-full bg-sand/30 flex items-center justify-center">
                <i class="fas fa-newspaper text-terracotta text-3xl"></i>
            </div>
            <p class="text-warm-800 text-xl font-serif font-bold">لا توجد مقالات حالياً</p>
            <p class="text-warm-400 text-sm mt-2 max-w-sm mx-auto">نقوم بتجهيز محتوى إبداعي جديد، ترقبونا قريباً!</p>
        </div>
        @endif

    </div>
</section>

<script>
    // Reveal Animation
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
