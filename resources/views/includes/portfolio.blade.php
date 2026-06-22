<!-- PORTFOLIO -->
<section id="portfolio" class="portfolio-bg py-20 md:py-28 bg-cream/50">
    <div class="max-w-[1400px] mx-auto px-6 md:px-12">
        <div class="text-center mb-12">
            <span class="reveal text-terracotta text-sm font-bold tracking-[0.15em]">أعمالنا</span>
            <h2 class="reveal reveal-delay-1 font-serif text-3xl md:text-5xl font-bold text-warm-900 mt-4">مشاريع تُلهم</h2>
        </div>

        <!-- أزرار الفلترة - تأكد إن id="portfolio-filters" موجود -->
        <div id="portfolio-filters" class="reveal flex flex-wrap justify-center gap-3 mb-14">
            <a href="{{ url()->current() }}"
                class="filter-btn px-5 py-2 rounded-full text-sm font-semibold border border-sand hover:border-terracotta transition-all {{ !request()->has('cat_id') ? 'filter-active' : '' }}">
                الكل
            </a>

            @foreach($categories as $category)
            <a href="{{ url()->current() . '?cat_id=' . $category->id }}"
                class="filter-btn px-5 py-2 rounded-full text-sm font-semibold border border-sand hover:border-terracotta transition-all {{ request('cat_id') == $category->id ? 'filter-active' : '' }}">
                {{ $category->name }}
            </a>
            @endforeach
        </div>

        <!-- كروت المشاريع - تأكد إن id="portfolio-grid" موجود -->
        <div id="portfolio-grid" class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($portfolios as $portfolio)
            <a href="{{ route('brand.show',$portfolio->brand->slug) }}">
                <div class="portfolio-item reveal card-lift group cursor-pointer">
                    <div class="relative img-reveal rounded-2xl overflow-hidden aspect-[4/5] border border-sand bg-white">

                        @if($portfolio->brand)
                        <div class="absolute top-4 right-4 z-10 flex items-center gap-2 bg-white/90 backdrop-blur-md px-3 py-2 rounded-full shadow-lg transition-transform duration-300 group-hover:scale-105 border border-white/50">
                            @if($portfolio->brand->image)
                            <img src="{{ Storage::url($portfolio->brand->image) }}" alt="{{ $portfolio->brand->name }}" class="w-8 h-8 rounded-full object-cover ring-2 ring-white">
                            @else
                            <div class="w-8 h-8 rounded-full bg-terracotta/20 flex items-center justify-center ring-2 ring-white">
                                <i class="fas fa-building text-terracotta text-xs"></i>
                            </div>
                            @endif
                            <span class="text-xs font-bold text-gray-800">{{ $portfolio->brand->name }}</span>
                        </div>
                        @endif

                        <img src="{{ $portfolio->image ? Storage::url($portfolio->image) : asset('images-layout/default-card.png') }}"
                            alt="{{ $portfolio->name }}"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">

                        <div class="absolute inset-0 bg-gradient-to-t from-warm-900/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-6">
                            <div>
                                <span class="text-terracotta text-xs font-bold">{{ $portfolio->category->name ?? 'غير مصنف' }}</span>
                                <h4 class="text-ivory font-serif text-xl font-bold">{{ $portfolio->name }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>

<script>
    setTimeout(function() {
        const filterBtns = document.querySelectorAll('#portfolio-filters .filter-btn');
        const portfolioGrid = document.getElementById('portfolio-grid');

        if (filterBtns.length > 0 && portfolioGrid) {
            console.log('✅ تم العثور على الأزرار والشبكة بنجاح!');

            // دالة جلب البيانات
            function fetchPortfolio(url) {
                portfolioGrid.style.opacity = '0.5';
                portfolioGrid.style.transition = 'opacity 0.3s ease';

                fetch(url, {
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    })
                    .then(response => response.text())
                    .then(html => {
                        const parser = new DOMParser();
                        const doc = parser.parseFromString(html, 'text/html');
                        const newGrid = doc.getElementById('portfolio-grid');

                        if (newGrid) {
                            portfolioGrid.innerHTML = newGrid.innerHTML;

                            const newItems = portfolioGrid.querySelectorAll('.reveal');
                            newItems.forEach((item, index) => {
                                item.classList.remove('active');

                                setTimeout(() => {
                                    item.classList.add('active');
                                }, 100 * index);
                            });
                        }

                        portfolioGrid.style.opacity = '1';
                        history.pushState({}, '', url);
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        portfolioGrid.style.opacity = '1';
                    });
            }

            filterBtns.forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    const url = this.getAttribute('href');

                    if (url === window.location.href || url === window.location.pathname) return;

                    filterBtns.forEach(b => b.classList.remove('filter-active'));
                    this.classList.add('filter-active');

                    fetchPortfolio(url);
                });
            });

            window.addEventListener('popstate', function() {
                fetchPortfolio(window.location.href);

                filterBtns.forEach(b => {
                    b.classList.remove('filter-active');
                    if (b.getAttribute('href') === window.location.href || b.getAttribute('href') === window.location.pathname) {
                        b.classList.add('filter-active');
                    }
                });
            });

        } else {
            console.log('❌ لسه مفيش أزرار أو شبكة');
        }
    }, 500);
</script>
