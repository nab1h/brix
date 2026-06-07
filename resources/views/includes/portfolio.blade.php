    <!-- PORTFOLIO -->
    <section id="portfolio" class="py-24 md:py-40">
        <div class="max-w-[1400px] mx-auto px-6 md:px-12">
            <div class="text-center mb-12">
                <span class="reveal text-terracotta text-sm font-bold tracking-[0.15em]">أعمالنا</span>
                <h2 class="reveal reveal-delay-1 font-serif text-3xl md:text-5xl font-bold text-warm-900 mt-4">مشاريع تُلهم</h2>
            </div>
            <div class="reveal flex flex-wrap justify-center gap-3 mb-14" id="portfolio-filters">
                <button onclick="filterPortfolio('all')" class="filter-btn px-5 py-2 rounded-full text-sm font-semibold border border-sand hover:border-terracotta transition-all filter-active">الكل</button>
                <button onclick="filterPortfolio('branding')" class="filter-btn px-5 py-2 rounded-full text-sm font-semibold border border-sand hover:border-terracotta transition-all">هويات بصرية</button>
                <button onclick="filterPortfolio('prints')" class="filter-btn px-5 py-2 rounded-full text-sm font-semibold border border-sand hover:border-terracotta transition-all">مطبوعات</button>
                <button onclick="filterPortfolio('signage')" class="filter-btn px-5 py-2 rounded-full text-sm font-semibold border border-sand hover:border-terracotta transition-all">لوحات إعلانية</button>
                <button onclick="filterPortfolio('packaging')" class="filter-btn px-5 py-2 rounded-full text-sm font-semibold border border-sand hover:border-terracotta transition-all">تغليف</button>
                <button onclick="filterPortfolio('social')" class="filter-btn px-5 py-2 rounded-full text-sm font-semibold border border-sand hover:border-terracotta transition-all">سوشيال ميديا</button>
            </div>
            <div id="portfolio-grid" class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="portfolio-item reveal card-lift group cursor-pointer" data-cat="branding">
                    <div class="relative img-reveal rounded-2xl overflow-hidden aspect-[4/5]"><img src="https://picsum.photos/seed/port-brand1/500/625.jpg" alt="" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-warm-900/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-6">
                            <div><span class="text-terracotta text-xs font-bold">هوية بصرية</span>
                                <h4 class="text-ivory font-serif text-xl font-bold">مطاعم الشرق</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item reveal reveal-delay-1 card-lift group cursor-pointer" data-cat="social">
                    <div class="relative img-reveal rounded-2xl overflow-hidden aspect-[4/5]"><img src="https://picsum.photos/seed/port-social1/500/625.jpg" alt="" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-warm-900/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-6">
                            <div><span class="text-olive-400 text-xs font-bold">سوشيال ميديا</span>
                                <h4 class="text-ivory font-serif text-xl font-bold">حملة أزياء ربيع</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item reveal reveal-delay-2 card-lift group cursor-pointer" data-cat="signage">
                    <div class="relative img-reveal rounded-2xl overflow-hidden aspect-[4/5]"><img src="https://picsum.photos/seed/port-sign1/500/625.jpg" alt="" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-warm-900/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-6">
                            <div><span class="text-brand-blue text-xs font-bold">لوحات إعلانية</span>
                                <h4 class="text-ivory font-serif text-xl font-bold">مول النخيل</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item reveal card-lift group cursor-pointer" data-cat="packaging">
                    <div class="relative img-reveal rounded-2xl overflow-hidden aspect-[4/5]"><img src="https://picsum.photos/seed/port-pack1/500/625.jpg" alt="" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-warm-900/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-6">
                            <div><span class="text-olive-400 text-xs font-bold">تغليف</span>
                                <h4 class="text-ivory font-serif text-xl font-bold">منتجات طبيعية</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item reveal reveal-delay-1 card-lift group cursor-pointer" data-cat="prints">
                    <div class="relative img-reveal rounded-2xl overflow-hidden aspect-[4/5]"><img src="https://picsum.photos/seed/port-print1/500/625.jpg" alt="" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-warm-900/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-6">
                            <div><span class="text-terracotta text-xs font-bold">مطبوعات</span>
                                <h4 class="text-ivory font-serif text-xl font-bold">بنك المستقبل</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item reveal reveal-delay-2 card-lift group cursor-pointer" data-cat="branding">
                    <div class="relative img-reveal rounded-2xl overflow-hidden aspect-[4/5]"><img src="https://picsum.photos/seed/port-brand2/500/625.jpg" alt="" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-warm-900/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-6">
                            <div><span class="text-terracotta text-xs font-bold">هوية بصرية</span>
                                <h4 class="text-ivory font-serif text-xl font-bold">مقاهي الفنجان</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
