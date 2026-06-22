<section id="services" class="services-bg py-20 md:py-28 bg-white">
    <div class="max-w-[1400px] mx-auto px-6 md:px-12">
        <div class="text-center mb-14">
            <span class="reveal text-terracotta text-sm font-bold tracking-[0.15em]">خدماتنا</span>
            <h2 class="reveal reveal-delay-1 font-serif text-3xl md:text-5xl font-bold text-warm-900 mt-4">حلول لكل <span class="text-terracotta">سياق</span></h2>
            <p class="reveal reveal-delay-2 text-warm-500 text-lg mt-4 max-w-xl mx-auto">سواء كنت تؤسس علامة جديدة أو تطور هوية موجودة — لدينا الحل المناسب</p>
        </div>


        <div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">




                @foreach ($categories as $category)
                <a href="{{ route('services.show', $category) }}" class="group relative block bg-white rounded-2xl overflow-hidden transition-all duration-300 border border-sand hover:border-olive-400/60 hover:shadow-xl">
                    <div class="relative overflow-hidden aspect-[4/3]">
                        <img src="{{ asset('storage/' . $category->img) }}" alt="تصميم الهوية البصرية" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-[1.03]">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    </div>

                    <div class="p-6 relative">
                        <div class="absolute top-0 right-6 w-8 h-0.5 bg-terracotta rounded-b-full transition-all duration-300 group-hover:w-12"></div>
                        <h4 class="text-lg font-semibold text-warm-900 mb-2 mt-2 group-hover:text-terracotta transition-colors duration-300">{{ $category->name }}</h4>
                        <p class="text-sm text-gray-500 leading-relaxed mb-5">{{ $category->description }}</p>
                    </div>
                </a>
                @endforeach



            </div>
        </div>
    </div>
    </div>
</section>
