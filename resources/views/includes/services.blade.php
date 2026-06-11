<section id="services" class="services-bg py-24 md:py-40">
    <div class="max-w-[1400px] mx-auto px-6 md:px-12">
        <div class="text-center mb-20">
            <span class="reveal text-terracotta text-sm font-bold tracking-[0.15em]">خدماتنا</span>
            <h2 class="reveal reveal-delay-1 font-serif text-3xl md:text-5xl font-bold text-warm-900 mt-4">حلول لكل <span class="text-terracotta">سياق</span></h2>
            <p class="reveal reveal-delay-2 text-warm-500 text-lg mt-4 max-w-xl mx-auto">سواء كنت تؤسس علامة جديدة أو تطور هوية موجودة — لدينا الحل المناسب</p>
        </div>


        <div class="mb-20">
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">




                @foreach ($categories as $category)
                <div class="group relative bg-white rounded-3xl overflow-hidden shadow-sm transition-all duration-500 hover:shadow-2xl hover:-translate-y-2 border border-gray-100 hover:border-terracotta/20">
                    <div class="relative overflow-hidden aspect-[4/3]">
                        <img src="{{ asset('storage/' . $category->img) }}" alt="تصميم الهوية البصرية" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    </div>

                    <div class="p-6 relative">
                        <div class="absolute top-0 left-6 w-10 h-1 bg-terracotta rounded-b-full transition-all duration-500 group-hover:w-16"></div>
                        <h4 class="text-xl font-bold text-gray-900 mb-2 mt-2 group-hover:text-terracotta transition-colors duration-300">{{ $category->name }}</h4>
                        <p class="text-sm text-gray-500 leading-relaxed mb-5">{{ $category->description }}</p>
                    </div>
                </div>
                @endforeach



            </div>
        </div>
    </div>
    </div>
</section>
