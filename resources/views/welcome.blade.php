@include('includes.header')




    <!-- HERO -->
    <section id="hero" class="relative min-h-screen flex items-center overflow-hidden">
        <div class="absolute inset-0">
            @php
            $image = $heroImage?->path
            ? asset('storage/' . $heroImage->path)
            : 'https://picsum.photos/seed/brix-nature-hero/1600/1000.jpg';
            @endphp

            <img src="{{ $image }}" class="w-full h-full object-cover" alt="Executive Chef">

            <div class="absolute inset-0 bg-gradient-to-l from-ivory/95 via-ivory/80 to-ivory/40"></div>
        </div>
        <div class="relative z-10 max-w-[1400px] mx-auto px-6 md:px-12 py-32 md:py-0 w-full">
            <div class="max-w-2xl">

                @php
                function highlightWord($text, $position = -2, $class = 'text-terracotta') {
                $words = explode(' ', $text);

                if (abs($position) > count($words)) {
                return $text;
                }

                $index = $position < 0
                    ? count($words) + $position
                    : $position;

                    $words[$index]='<span class="' .$class.'">'.$words[$index].'</span>';

                    return implode(' ', $words);
                    }
                    @endphp

                    <h1 class="reveal reveal-delay-1 font-serif text-4xl md:text-6xl lg:text-7xl font-bold leading-[1.15] text-warm-900 mb-8">
                        {!! highlightWord(" $content->hero_title_ar ", -2) !!}
                    </h1>
                    <p class="reveal reveal-delay-2 text-lg md:text-xl text-warm-500 leading-relaxed mb-12 max-w-lg font-light">
                        في Brix، نؤمن بأن كل فكرة تستحق أن تُرى بأفضل صورة. نحن لا نطبع فقط — نصنع تجارب بصرية تترك أثراً دائماً.
                    </p>
                    <div class="reveal reveal-delay-3 flex flex-wrap gap-4">
                        <a href="#quote" class="group inline-flex items-center gap-3 px-8 py-4 bg-terracotta text-ivory font-bold rounded-full hover:bg-warm-800 transition-all duration-400">
                            اطلب عرض سعر
                            <span class="w-8 h-8 rounded-full bg-white/20 flex items-center justify-center group-hover:-translate-x-1 transition-transform"><i class="fas fa-arrow-left text-xs"></i></span>
                        </a>
                        <a href="#about" class="inline-flex items-center gap-2 px-8 py-4 border-2 border-warm-300 text-warm-700 font-bold rounded-full hover:border-terracotta hover:text-terracotta transition-all duration-400">
                            اكتشف المزيد
                        </a>
                    </div>
            </div>
        </div>
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 text-warm-400">
            <span class="text-[10px] tracking-[0.2em] font-semibold">استكشف</span>
            <div class="w-px h-12 bg-warm-300 relative overflow-hidden">
                <div class="w-full h-1/2 bg-terracotta absolute top-0 animate-bounce"></div>
            </div>
        </div>
    </section>


    <!-- MARQUEE -->
    <div class="py-6 border-y border-sand overflow-hidden bg-cream/50">
        <div class="marquee-track flex items-center gap-12 whitespace-nowrap" style="width:max-content">
            <span class="text-warm-300 text-sm font-semibold tracking-wider">الطباعة الديجيتال</span><span class="text-terracotta text-xs">✦</span>
            <span class="text-warm-300 text-sm font-semibold tracking-wider">الهوية البصرية</span><span class="text-terracotta text-xs">✦</span>
            <span class="text-warm-300 text-sm font-semibold tracking-wider">اللوحات الإعلانية</span><span class="text-terracotta text-xs">✦</span>
            <span class="text-warm-300 text-sm font-semibold tracking-wider">السوشيال ميديا</span><span class="text-terracotta text-xs">✦</span>
            <span class="text-warm-300 text-sm font-semibold tracking-wider">التغليف والعبوات</span><span class="text-terracotta text-xs">✦</span>
            <span class="text-warm-300 text-sm font-semibold tracking-wider">الهدايا الدعائية</span><span class="text-terracotta text-xs">✦</span>
            <span class="text-warm-300 text-sm font-semibold tracking-wider">الحملات التسويقية</span><span class="text-terracotta text-xs">✦</span>
            <span class="text-warm-300 text-sm font-semibold tracking-wider">الطباعة الديجيتال</span><span class="text-terracotta text-xs">✦</span>
            <span class="text-warm-300 text-sm font-semibold tracking-wider">الهوية البصرية</span><span class="text-terracotta text-xs">✦</span>
            <span class="text-warm-300 text-sm font-semibold tracking-wider">اللوحات الإعلانية</span><span class="text-terracotta text-xs">✦</span>
            <span class="text-warm-300 text-sm font-semibold tracking-wider">السوشيال ميديا</span><span class="text-terracotta text-xs">✦</span>
            <span class="text-warm-300 text-sm font-semibold tracking-wider">التغليف والعبوات</span><span class="text-terracotta text-xs">✦</span>
            <span class="text-warm-300 text-sm font-semibold tracking-wider">الهدايا الدعائية</span><span class="text-terracotta text-xs">✦</span>
            <span class="text-warm-300 text-sm font-semibold tracking-wider">الحملات التسويقية</span><span class="text-terracotta text-xs">✦</span>
        </div>
    </div>


    <!-- ABOUT -->
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


    <!-- VALUES -->
    <section class="py-24 md:py-32 bg-cream/60">
        <div class="max-w-[1400px] mx-auto px-6 md:px-12">
            <div class="text-center mb-20">
                <span class="reveal text-terracotta text-sm font-bold tracking-[0.15em]">قيمنا</span>
                <h2 class="reveal reveal-delay-1 font-serif text-3xl md:text-5xl font-bold text-warm-900 mt-4">ما يتمسك به <span class="text-terracotta">فريقنا</span></h2>
            </div>
            <div class="grid md:grid-cols-3 gap-8 md:gap-12">
                <div class="reveal text-center">
                    <div class="w-20 h-20 rounded-full bg-olive-100 mx-auto mb-6 flex items-center justify-center"><i class="fas fa-seedling text-olive-600 text-2xl"></i></div>
                    <h3 class="font-serif text-2xl font-bold mb-4 text-warm-900">الجودة أولاً</h3>
                    <p class="text-warm-500 leading-[1.9]">كل تفصيلة تمر بمراجعات دقيقة قبل أن تصل إليك. لا نقبل بأقل من الأفضل لأن علامتك التجارية تستحق التميز.</p>
                </div>
                <div class="reveal reveal-delay-1 text-center">
                    <div class="w-20 h-20 rounded-full bg-terracotta/10 mx-auto mb-6 flex items-center justify-center"><i class="fas fa-handshake text-terracotta text-2xl"></i></div>
                    <h3 class="font-serif text-2xl font-bold mb-4 text-warm-900">شراكة حقيقية</h3>
                    <p class="text-warm-500 leading-[1.9]">لسنا مجرد مزود خدمة — نحن شريكك في الرحلة. نستمع، نفهم، ونشاركك نفس الشغف لتحقيق رؤيتك.</p>
                </div>
                <div class="reveal reveal-delay-2 text-center">
                    <div class="w-20 h-20 rounded-full bg-brand-blue/10 mx-auto mb-6 flex items-center justify-center"><i class="fas fa-lightbulb text-brand-blue text-2xl"></i></div>
                    <h3 class="font-serif text-2xl font-bold mb-4 text-warm-900">ابتكار مستمر</h3>
                    <p class="text-warm-500 leading-[1.9]">نواكب أحدث التقنيات والاتجاهات لنقدم لك حلولاً لم تكن ممكنة بالأمس. التطور ليس خياراً بل التزام.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- SERVICES -->
    <section id="services" class="py-24 md:py-40">
        <div class="max-w-[1400px] mx-auto px-6 md:px-12">
            <div class="text-center mb-20">
                <span class="reveal text-terracotta text-sm font-bold tracking-[0.15em]">خدماتنا</span>
                <h2 class="reveal reveal-delay-1 font-serif text-3xl md:text-5xl font-bold text-warm-900 mt-4">حلول لكل <span class="text-terracotta">سياق</span></h2>
                <p class="reveal reveal-delay-2 text-warm-500 text-lg mt-4 max-w-xl mx-auto">سواء كنت تؤسس علامة جديدة أو تطور هوية موجودة — لدينا الحل المناسب</p>
            </div>

            <div class="mb-20">
                <div class="reveal flex items-center gap-4 mb-8">
                    <div class="w-10 h-10 rounded-full bg-terracotta/10 flex items-center justify-center"><i class="fas fa-building text-terracotta text-sm"></i></div>
                    <h3 class="font-serif text-2xl font-bold text-warm-900">لهويتك التجارية</h3>
                </div>
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="reveal card-lift group bg-ivory border border-sand rounded-2xl overflow-hidden hover:border-terracotta/30 transition-all duration-500">
                        <div class="img-reveal aspect-[3/2]"><img src="https://picsum.photos/seed/brand-identity-bx/600/400.jpg" alt="" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"></div>
                        <div class="p-6">
                            <h4 class="font-serif text-xl font-bold mb-2 group-hover:text-terracotta transition-colors">تصميم الهوية البصرية</h4>
                            <p class="text-sm text-warm-500 leading-relaxed">شعارات وهويات متكاملة تعكس روح علامتك التجارية بكل وضوح</p>
                        </div>
                    </div>
                    <div class="reveal reveal-delay-1 card-lift group bg-ivory border border-sand rounded-2xl overflow-hidden hover:border-terracotta/30 transition-all duration-500">
                        <div class="img-reveal aspect-[3/2]"><img src="https://picsum.photos/seed/social-design-bx/600/400.jpg" alt="" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"></div>
                        <div class="p-6">
                            <h4 class="font-serif text-xl font-bold mb-2 group-hover:text-terracotta transition-colors">تصميم السوشيال ميديا</h4>
                            <p class="text-sm text-warm-500 leading-relaxed">محتوى بصري جذاب يعزز تواجدك الرقمي ويزيد تفاعل جمهورك</p>
                        </div>
                    </div>
                    <div class="reveal reveal-delay-2 card-lift group bg-ivory border border-sand rounded-2xl overflow-hidden hover:border-terracotta/30 transition-all duration-500">
                        <div class="img-reveal aspect-[3/2]"><img src="https://picsum.photos/seed/marketing-camp-bx/600/400.jpg" alt="" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"></div>
                        <div class="p-6">
                            <h4 class="font-serif text-xl font-bold mb-2 group-hover:text-terracotta transition-colors">الحملات التسويقية</h4>
                            <p class="text-sm text-warm-500 leading-relaxed">تخطيط وتنفيذ حملات متكاملة تحقق نتائج ملموسة ومستدامة</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-20">
                <div class="reveal flex items-center gap-4 mb-8">
                    <div class="w-10 h-10 rounded-full bg-olive-100 flex items-center justify-center"><i class="fas fa-print text-olive-600 text-sm"></i></div>
                    <h3 class="font-serif text-2xl font-bold text-warm-900">لطباعتك واحتياجاتك</h3>
                </div>
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="reveal card-lift group bg-ivory border border-sand rounded-2xl overflow-hidden hover:border-olive-400/30 transition-all duration-500">
                        <div class="img-reveal aspect-[3/2]"><img src="https://picsum.photos/seed/digital-print-bx/600/400.jpg" alt="" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"></div>
                        <div class="p-6">
                            <h4 class="font-serif text-xl font-bold mb-2 group-hover:text-olive-600 transition-colors">الطباعة الديجيتال</h4>
                            <p class="text-sm text-warm-500 leading-relaxed">طباعة رقمية فائقة الجودة بجميع المقاسات وعلى مختلف الخامات</p>
                        </div>
                    </div>
                    <div class="reveal reveal-delay-1 card-lift group bg-ivory border border-sand rounded-2xl overflow-hidden hover:border-olive-400/30 transition-all duration-500">
                        <div class="img-reveal aspect-[3/2]"><img src="https://picsum.photos/seed/large-format-bx/600/400.jpg" alt="" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"></div>
                        <div class="p-6">
                            <h4 class="font-serif text-xl font-bold mb-2 group-hover:text-olive-600 transition-colors">الطباعة بمقاسات كبيرة</h4>
                            <p class="text-sm text-warm-500 leading-relaxed">بانرات وملصقات ولوحات بمقاسات واسعة وألوان زاهية ومستقرة</p>
                        </div>
                    </div>
                    <div class="reveal reveal-delay-2 card-lift group bg-ivory border border-sand rounded-2xl overflow-hidden hover:border-olive-400/30 transition-all duration-500">
                        <div class="img-reveal aspect-[3/2]"><img src="https://picsum.photos/seed/commercial-print-bx/600/400.jpg" alt="" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"></div>
                        <div class="p-6">
                            <h4 class="font-serif text-xl font-bold mb-2 group-hover:text-olive-600 transition-colors">المطبوعات التجارية</h4>
                            <p class="text-sm text-warm-500 leading-relaxed">بطاقات عمل وخطابات ومطبوعات مؤسسية بأعلى معايير الاحتراف</p>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="reveal flex items-center gap-4 mb-8">
                    <div class="w-10 h-10 rounded-full bg-brand-blue/10 flex items-center justify-center"><i class="fas fa-store text-brand-blue text-sm"></i></div>
                    <h3 class="font-serif text-2xl font-bold text-warm-900">لمناسباتك ومنتجاتك</h3>
                </div>
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="reveal card-lift group bg-ivory border border-sand rounded-2xl overflow-hidden hover:border-brand-blue/30 transition-all duration-500">
                        <div class="img-reveal aspect-[3/2]"><img src="https://picsum.photos/seed/signage-bx/600/400.jpg" alt="" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"></div>
                        <div class="p-6">
                            <h4 class="font-serif text-xl font-bold mb-2 group-hover:text-brand-blue transition-colors">اللوحات الإعلانية</h4>
                            <p class="text-sm text-warm-500 leading-relaxed">لوحات خارجية وداخلية وتجهيز معارض وفعاليات بكفاءة عالية</p>
                        </div>
                    </div>
                    <div class="reveal reveal-delay-1 card-lift group bg-ivory border border-sand rounded-2xl overflow-hidden hover:border-brand-blue/30 transition-all duration-500">
                        <div class="img-reveal aspect-[3/2]"><img src="https://picsum.photos/seed/promo-gifts-bx/600/400.jpg" alt="" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"></div>
                        <div class="p-6">
                            <h4 class="font-serif text-xl font-bold mb-2 group-hover:text-brand-blue transition-colors">الهدايا الدعائية</h4>
                            <p class="text-sm text-warm-500 leading-relaxed">أكثر من ٥٠٠٠ منتج دعائي بتخصيص كامل يحمل علامتك بأسلوب أنيق</p>
                        </div>
                    </div>
                    <div class="reveal reveal-delay-2 card-lift group bg-ivory border border-sand rounded-2xl overflow-hidden hover:border-brand-blue/30 transition-all duration-500">
                        <div class="img-reveal aspect-[3/2]"><img src="https://picsum.photos/seed/packaging-bx/600/400.jpg" alt="" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"></div>
                        <div class="p-6">
                            <h4 class="font-serif text-xl font-bold mb-2 group-hover:text-brand-blue transition-colors">التغليف والعبوات</h4>
                            <p class="text-sm text-warm-500 leading-relaxed">تصميم وتصنيع عبوات مبتكرة تحمي منتجاتك وتجذب الأنظار</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- PROCESS -->
    <section class="py-24 md:py-32 relative overflow-hidden min-h-[600px]">
        <!-- Gradient Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-[#1946AF] via-[#8B2A50] to-[#FA6B31]"></div>

        <!-- Organic Flowing Curves (SVG) -->
        <div class="absolute inset-0 overflow-hidden">
            <svg class="absolute top-0 right-0 w-full h-full opacity-10" viewBox="0 0 1440 900" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1440 0C1200 100 900 50 700 200C500 350 300 200 0 300V900H1440V0Z" fill="url(#curve1)" />
                <path d="M1440 150C1100 250 800 100 600 300C400 500 200 350 0 450V900H1440V150Z" fill="url(#curve2)" />
                <path d="M1440 400C1000 500 700 350 500 500C300 650 100 550 0 600V900H1440V400Z" fill="url(#curve3)" />
                <defs>
                    <linearGradient id="curve1" x1="0" y1="0" x2="1440" y2="900" gradientUnits="userSpaceOnUse">
                        <stop offset="0%" stop-color="#FA6B31" />
                        <stop offset="50%" stop-color="#8B2A50" />
                        <stop offset="100%" stop-color="#1946AF" />
                    </linearGradient>
                    <linearGradient id="curve2" x1="1440" y1="0" x2="0" y2="900" gradientUnits="userSpaceOnUse">
                        <stop offset="0%" stop-color="#1946AF" />
                        <stop offset="50%" stop-color="#C4572A" />
                        <stop offset="100%" stop-color="#FA6B31" />
                    </linearGradient>
                    <linearGradient id="curve3" x1="0" y1="900" x2="1440" y2="0" gradientUnits="userSpaceOnUse">
                        <stop offset="0%" stop-color="#FA6B31" stop-opacity="0.6" />
                        <stop offset="100%" stop-color="#1946AF" stop-opacity="0.3" />
                    </linearGradient>
                </defs>
            </svg>
        </div>

        <!-- Floating Circles -->
        <div class="absolute top-20 right-20 w-72 h-72 bg-[#FA6B31]/15 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 left-20 w-96 h-96 bg-[#1946AF]/15 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-[#8B2A50]/10 rounded-full blur-3xl"></div>

        <!-- Grid Overlay -->
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(circle, #fff 1px, transparent 1px); background-size: 30px 30px;"></div>

        <!-- Content -->
        <div class="max-w-[1400px] mx-auto px-6 md:px-12 relative z-10">
            <div class="text-center mb-20">
                <span class="reveal text-orange-200 text-sm font-bold tracking-[0.15em]">مراحل العمل</span>
                <h2 class="reveal reveal-delay-1 font-serif text-3xl md:text-5xl font-bold text-white mt-4">شفافية في كل <span class="text-orange-300">خطوة</span></h2>
                <p class="reveal reveal-delay-2 text-blue-100/70 text-lg mt-4 max-w-xl mx-auto">نعمل بعملية واضحة ومحددة حتى تعرف بالضبط أين وصل مشروعك</p>
            </div>

            <div class="relative">
                <!-- Connection Line -->
                <div class="hidden md:block absolute top-[52px] right-[10%] left-[10%] h-[2px]">
                    <div class="w-full h-full bg-gradient-to-l from-[#FA6B31] via-[#C4572A] to-[#1946AF] opacity-30 rounded-full"></div>
                    <div class="absolute top-0 right-0 h-full w-0 bg-gradient-to-l from-[#FA6B31] via-[#C4572A] to-[#1946AF] rounded-full animate-[lineGrow_3s_ease-out_forwards]"></div>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-5 gap-8 md:gap-6">
                    <!-- Step 1 -->
                    <div class="reveal text-center">
                        <div class="relative mx-auto mb-6 w-[104px]">
                            <div class="w-[104px] h-[104px] rounded-full bg-gradient-to-br from-[#FA6B31] to-[#FA6B31]/60 flex items-center justify-center shadow-lg shadow-[#FA6B31]/30">
                                <div class="w-[88px] h-[88px] rounded-full bg-gradient-to-br from-[#FA6B31] to-[#E85A20] flex items-center justify-center">
                                    <span class="font-serif text-3xl font-bold text-white">١</span>
                                </div>
                            </div>
                            <div class="absolute -bottom-1 -right-1 w-7 h-7 rounded-full bg-white shadow-md flex items-center justify-center">
                                <i class="fas fa-ear-listen text-[#FA6B31] text-[10px]"></i>
                            </div>
                        </div>
                        <h4 class="font-serif text-lg font-bold mb-2 text-white">استماع</h4>
                        <p class="text-sm text-blue-100/60 leading-relaxed">نفهم احتياجك بدقة ونسأل الأسئلة الصحيحة</p>
                    </div>

                    <!-- Step 2 -->
                    <div class="reveal reveal-delay-1 text-center">
                        <div class="relative mx-auto mb-6 w-[104px]">
                            <div class="w-[104px] h-[104px] rounded-full bg-gradient-to-br from-[#C4572A] to-[#C4572A]/60 flex items-center justify-center shadow-lg shadow-[#C4572A]/30">
                                <div class="w-[88px] h-[88px] rounded-full bg-gradient-to-br from-[#C4572A] to-[#8B2A50] flex items-center justify-center">
                                    <span class="font-serif text-3xl font-bold text-white">٢</span>
                                </div>
                            </div>
                            <div class="absolute -bottom-1 -right-1 w-7 h-7 rounded-full bg-white shadow-md flex items-center justify-center">
                                <i class="fas fa-pencil-ruler text-[#C4572A] text-[10px]"></i>
                            </div>
                        </div>
                        <h4 class="font-serif text-lg font-bold mb-2 text-white">تصميم</h4>
                        <p class="text-sm text-blue-100/60 leading-relaxed">نبتكر حلولاً بصرية تعبر عن رؤيتك بصدق</p>
                    </div>

                    <!-- Step 3 -->
                    <div class="reveal reveal-delay-2 text-center">
                        <div class="relative mx-auto mb-6 w-[104px]">
                            <div class="w-[104px] h-[104px] rounded-full bg-gradient-to-br from-[#8B2A50] to-[#8B2A50]/60 flex items-center justify-center shadow-lg shadow-[#8B2A50]/30">
                                <div class="w-[88px] h-[88px] rounded-full bg-gradient-to-br from-[#8B2A50] to-[#5C1A3A] flex items-center justify-center">
                                    <span class="font-serif text-3xl font-bold text-white">٣</span>
                                </div>
                            </div>
                            <div class="absolute -bottom-1 -right-1 w-7 h-7 rounded-full bg-white shadow-md flex items-center justify-center">
                                <i class="fas fa-check-double text-[#8B2A50] text-[10px]"></i>
                            </div>
                        </div>
                        <h4 class="font-serif text-lg font-bold mb-2 text-white">مراجعة</h4>
                        <p class="text-sm text-blue-100/60 leading-relaxed">نراجع معك ونعدل حتى الرضا التام</p>
                    </div>

                    <!-- Step 4 -->
                    <div class="reveal reveal-delay-3 text-center">
                        <div class="relative mx-auto mb-6 w-[104px]">
                            <div class="w-[104px] h-[104px] rounded-full bg-gradient-to-br from-[#3D3A8B] to-[#3D3A8B]/60 flex items-center justify-center shadow-lg shadow-[#3D3A8B]/30">
                                <div class="w-[88px] h-[88px] rounded-full bg-gradient-to-br from-[#3D3A8B] to-[#1946AF] flex items-center justify-center">
                                    <span class="font-serif text-3xl font-bold text-white">٤</span>
                                </div>
                            </div>
                            <div class="absolute -bottom-1 -right-1 w-7 h-7 rounded-full bg-white shadow-md flex items-center justify-center">
                                <i class="fas fa-industry text-[#1946AF] text-[10px]"></i>
                            </div>
                        </div>
                        <h4 class="font-serif text-lg font-bold mb-2 text-white">إنتاج</h4>
                        <p class="text-sm text-blue-100/60 leading-relaxed">تنفيذ بأعلى معايير الجودة والتقنية</p>
                    </div>

                    <!-- Step 5 -->
                    <div class="reveal reveal-delay-4 text-center col-span-2 md:col-span-1">
                        <div class="relative mx-auto mb-6 w-[104px]">
                            <div class="w-[104px] h-[104px] rounded-full bg-gradient-to-br from-[#1946AF] to-[#1946AF]/60 flex items-center justify-center shadow-lg shadow-[#1946AF]/30">
                                <div class="w-[88px] h-[88px] rounded-full bg-gradient-to-br from-[#1946AF] to-[#0F2E79] flex items-center justify-center">
                                    <span class="font-serif text-3xl font-bold text-white">٥</span>
                                </div>
                            </div>
                            <div class="absolute -bottom-1 -right-1 w-7 h-7 rounded-full bg-white shadow-md flex items-center justify-center">
                                <i class="fas fa-truck-fast text-[#1946AF] text-[10px]"></i>
                            </div>
                        </div>
                        <h4 class="font-serif text-lg font-bold mb-2 text-white">تسليم</h4>
                        <p class="text-sm text-blue-100/60 leading-relaxed">نسلمك المشروع ونتابع النتائج معك</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- PORTFOLIO -->
    @include('includes.portfolio')

    <!-- TESTIMONIALS -->
    <section class="py-24 md:py-32 relative overflow-hidden" id="testimonials">
        <!-- Background Image Layer -->
        <div class="absolute inset-0 bg-ivory">
            <!-- الطبقة ١: تدرج لوني بألوان البراند الأساسية (البرتقالي والأزرق) -->
            <div class="absolute inset-0 bg-gradient-to-tr from-[#1946AF]/15 via-transparent to-[#FA6B31]/15"></div>

            <!-- الطبقة ٢: صورة طابع الطباعة والأحبار (محولة للرمادي ومزوجة كحبر) -->
            <img src="testimonial.jpg" alt="" class="absolute inset-0 w-full h-full object-cover opacity-[0.08] mix-blend-multiply grayscale">

            <!-- الطبقة ٣: نقاط بناتق CMYK (أقرب شيء للطباعة الديجيتال) -->
            <div class="absolute inset-0 bg-print-halftone"></div>
        </div>

        <div class="relative z-10 max-w-[1400px] mx-auto px-6 md:px-12">
            <div class="text-center mb-20">
                <span class="reveal text-terracotta text-sm font-bold tracking-[0.15em]">أصوات عملائنا</span>
                <h2 class="reveal reveal-delay-1 font-serif text-3xl md:text-5xl font-bold text-warm-900 mt-4">قصص <span class="text-terracotta">حقيقية</span></h2>
            </div>

            <!-- Slider -->
            <div class="reveal relative mb-20">
                <div id="testi-slider" class="overflow-hidden rounded-3xl">
                    <div id="testi-track" class="flex transition-transform duration-700 ease-out">
                        <!-- Slide 1 -->
                        <div class="w-full flex-shrink-0 px-2">
                            <div class="bg-ivory/70 backdrop-blur-md border border-sand/50 rounded-2xl p-8 md:p-14 md:flex md:items-start md:gap-12">
                                <div class="md:flex-shrink-0 mb-6 md:mb-0 text-center md:text-right">
                                    <div class="w-20 h-20 md:w-24 md:h-24 rounded-full bg-olive-100 flex items-center justify-center text-olive-600 font-serif text-3xl md:text-4xl font-bold mx-auto md:mx-0">ع</div>
                                    <div class="mt-4 hidden md:block">
                                        <span class="font-bold text-warm-900 block">عبدالله المطيري</span>
                                        <span class="text-xs text-warm-400">مدير التسويق</span>
                                        <span class="block text-xs text-terracotta font-semibold">شركة الأفق</span>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <div class="text-terracotta/50 text-6xl md:text-7xl font-serif leading-none mb-2">"</div>
                                    <p class="text-warm-700 text-lg md:text-xl leading-[1.9] mb-6">تعاملنا مع Brix كان تجربة استثنائية. جودة العمل والالتزام بالمواعيد تفوق توقعاتنا. فريق محترف يفهم احتياجات العميل حقاً.</p>
                                    <div class="flex items-center gap-1 mb-4"><i class="fas fa-star text-yellow-500 text-sm"></i><i class="fas fa-star text-yellow-500 text-sm"></i><i class="fas fa-star text-yellow-500 text-sm"></i><i class="fas fa-star text-yellow-500 text-sm"></i><i class="fas fa-star text-yellow-500 text-sm"></i></div>
                                    <div class="md:hidden"><span class="font-bold text-warm-900 block">عبدالله المطيري</span><span class="text-xs text-warm-400">مدير التسويق — شركة الأفق</span></div>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 2 -->
                        <div class="w-full flex-shrink-0 px-2">
                            <div class="bg-ivory/70 backdrop-blur-md border border-sand/50 rounded-2xl p-8 md:p-14 md:flex md:items-start md:gap-12">
                                <div class="md:flex-shrink-0 mb-6 md:mb-0 text-center md:text-right">
                                    <div class="w-20 h-20 md:w-24 md:h-24 rounded-full bg-terracotta/10 flex items-center justify-center text-terracotta font-serif text-3xl md:text-4xl font-bold mx-auto md:mx-0">م</div>
                                    <div class="mt-4 hidden md:block">
                                        <span class="font-bold text-warm-900 block">منى الحربي</span>
                                        <span class="text-xs text-warm-400">مديرة العلامة التجارية</span>
                                        <span class="block text-xs text-terracotta font-semibold">بيوت الأزياء</span>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <div class="text-terracotta/50 text-6xl md:text-7xl font-serif leading-none mb-2">"</div>
                                    <p class="text-warm-700 text-lg md:text-xl leading-[1.9] mb-6">الهوية البصرية التي صمموها لنا غيّرت نظرتنا تماماً. الآن علامتنا تتحدث عن نفسها قبل أن نتحدث نحن. أنصح بهم بشدة.</p>
                                    <div class="flex items-center gap-1 mb-4"><i class="fas fa-star text-yellow-500 text-sm"></i><i class="fas fa-star text-yellow-500 text-sm"></i><i class="fas fa-star text-yellow-500 text-sm"></i><i class="fas fa-star text-yellow-500 text-sm"></i><i class="fas fa-star text-yellow-500 text-sm"></i></div>
                                    <div class="md:hidden"><span class="font-bold text-warm-900 block">منى الحربي</span><span class="text-xs text-warm-400">مديرة العلامة — بيوت الأزياء</span></div>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 3 -->
                        <div class="w-full flex-shrink-0 px-2">
                            <div class="bg-ivory/70 backdrop-blur-md border border-sand/50 rounded-2xl p-8 md:p-14 md:flex md:items-start md:gap-12">
                                <div class="md:flex-shrink-0 mb-6 md:mb-0 text-center md:text-right">
                                    <div class="w-20 h-20 md:w-24 md:h-24 rounded-full bg-brand-blue/10 flex items-center justify-center text-brand-blue font-serif text-3xl md:text-4xl font-bold mx-auto md:mx-0">ف</div>
                                    <div class="mt-4 hidden md:block">
                                        <span class="font-bold text-warm-900 block">فهد الدوسري</span>
                                        <span class="text-xs text-warm-400">صاحب سلسلة مطاعم</span>
                                        <span class="block text-xs text-terracotta font-semibold">مطاعم المملكة</span>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <div class="text-terracotta/50 text-6xl md:text-7xl font-serif leading-none mb-2">"</div>
                                    <p class="text-warm-700 text-lg md:text-xl leading-[1.9] mb-6">اللوحات الإعلانية والهدايا الدعائية كانت بجودة عالية جداً وسعر مناسب. الخدمة من البداية للنهاية كانت سلسة ومريحة.</p>
                                    <div class="flex items-center gap-1 mb-4"><i class="fas fa-star text-yellow-500 text-sm"></i><i class="fas fa-star text-yellow-500 text-sm"></i><i class="fas fa-star text-yellow-500 text-sm"></i><i class="fas fa-star text-yellow-500 text-sm"></i><i class="fas fa-star text-yellow-500 text-sm"></i></div>
                                    <div class="md:hidden"><span class="font-bold text-warm-900 block">فهد الدوسري</span><span class="text-xs text-warm-400">صاحب مطاعم — مطاعم المملكة</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Navigation Arrows -->
                <button onclick="slideTesti(-1)" class="absolute top-1/2 -translate-y-1/2 -right-4 md:-right-6 w-12 h-12 rounded-full bg-ivory/80 backdrop-blur-sm border border-sand shadow-lg flex items-center justify-center text-warm-600 hover:bg-terracotta hover:text-ivory hover:border-terracotta transition-all z-10"><i class="fas fa-chevron-right text-sm"></i></button>
                <button onclick="slideTesti(1)" class="absolute top-1/2 -translate-y-1/2 -left-4 md:-left-6 w-12 h-12 rounded-full bg-ivory/80 backdrop-blur-sm border border-sand shadow-lg flex items-center justify-center text-warm-600 hover:bg-terracotta hover:text-ivory hover:border-terracotta transition-all z-10"><i class="fas fa-chevron-left text-sm"></i></button>
                <!-- Dots -->
                <div id="testi-dots" class="flex justify-center gap-2 mt-8">
                    <button onclick="goToSlide(0)" class="testi-dot w-3 h-3 rounded-full bg-terracotta transition-all"></button>
                    <button onclick="goToSlide(1)" class="testi-dot w-3 h-3 rounded-full bg-sand transition-all"></button>
                    <button onclick="goToSlide(2)" class="testi-dot w-3 h-3 rounded-full bg-sand transition-all"></button>
                </div>
            </div>

            <!-- Submission Form -->
            <div class="reveal max-w-2xl mx-auto">
                <div class="text-center mb-10">
                    <span class="text-olive-600 text-sm font-bold tracking-[0.15em]">شاركنا رأيك</span>
                    <h3 class="font-serif text-2xl md:text-3xl font-bold text-warm-900 mt-3">تجربتك تهمنا</h3>
                </div>
                <form id="testi-form" action="{{ route('testimonials.store') }}" method="POST" class="bg-ivory/80 backdrop-blur-md border border-sand/50 rounded-2xl p-8 md:p-10 space-y-5 shadow-xl">
                    @csrf
                    <div class="grid sm:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-sm font-bold text-warm-700 mb-2">الاسم *</label>
                            <input name="name" type="text" required placeholder="اسمك الكامل" class="w-full px-4 py-3 rounded-xl border border-sand bg-cream/70 text-sm focus:border-terracotta outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-warm-700 mb-2">الوظيفة *</label>
                            <input name="job" type="text" required placeholder="مثال: مدير التسويق" class="w-full px-4 py-3 rounded-xl border border-sand bg-cream/70 text-sm focus:border-terracotta outline-none transition-all">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-warm-700 mb-2">الشركة</label>
                        <input name="role" type="text" placeholder="اسم الشركة (اختياري)" class="w-full px-4 py-3 rounded-xl border border-sand bg-cream/70 text-sm focus:border-terracotta outline-none transition-all">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-warm-700 mb-2">رسالتك *</label>
                        <textarea name="message" rows="4" required placeholder="شاركنا تجربتك مع Brix..." class="w-full px-4 py-3 rounded-xl border border-sand bg-cream/70 text-sm focus:border-terracotta outline-none transition-all resize-none"></textarea>
                    </div>
                    <!-- Submit Button -->
                    <button type="submit" class="w-full py-4 bg-terracotta text-ivory font-bold rounded-full hover:bg-warm-800 transition-all duration-300 flex items-center justify-center gap-2">
                        <i class="fas fa-paper-plane text-sm"></i> أرسل شهادتك
                    </button>
                </form>
            </div>
        </div>
    </section>


    <!-- CLIENTS -->
    <section class="py-20 md:py-28">
        <div class="max-w-[1400px] mx-auto px-6 md:px-12">
            <div class="text-center mb-14">
                <span class="reveal text-terracotta text-sm font-bold tracking-[0.15em]">شركاؤنا</span>
                <h2 class="reveal reveal-delay-1 font-serif text-3xl md:text-4xl font-bold text-warm-900 mt-4">يثقون بنا</h2>
            </div>
            <div class="reveal grid grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6">
                <div class="h-24 rounded-xl border border-sand bg-ivory flex items-center justify-center hover:border-terracotta/30 transition-colors"><span class="font-serif font-bold text-warm-400 text-sm text-center">أرامكو</span></div>
                <div class="h-24 rounded-xl border border-sand bg-ivory flex items-center justify-center hover:border-terracotta/30 transition-colors"><span class="font-serif font-bold text-warm-400 text-sm text-center">بنك الأهلي</span></div>
                <div class="h-24 rounded-xl border border-sand bg-ivory flex items-center justify-center hover:border-terracotta/30 transition-colors"><span class="font-serif font-bold text-warm-400 text-sm text-center">STC</span></div>
                <div class="h-24 rounded-xl border border-sand bg-ivory flex items-center justify-center hover:border-terracotta/30 transition-colors"><span class="font-serif font-bold text-warm-400 text-sm text-center">الراجحي</span></div>
                <div class="h-24 rounded-xl border border-sand bg-ivory flex items-center justify-center hover:border-terracotta/30 transition-colors"><span class="font-serif font-bold text-warm-400 text-sm text-center">سابك</span></div>
                <div class="h-24 rounded-xl border border-sand bg-ivory flex items-center justify-center hover:border-terracotta/30 transition-colors"><span class="font-serif font-bold text-warm-400 text-sm text-center">السعودية</span></div>
                <div class="h-24 rounded-xl border border-sand bg-ivory flex items-center justify-center hover:border-terracotta/30 transition-colors"><span class="font-serif font-bold text-warm-400 text-sm text-center">العليان</span></div>
                <div class="h-24 rounded-xl border border-sand bg-ivory flex items-center justify-center hover:border-terracotta/30 transition-colors"><span class="font-serif font-bold text-warm-400 text-sm text-center">معادن</span></div>
                <div class="h-24 rounded-xl border border-sand bg-ivory flex items-center justify-center hover:border-terracotta/30 transition-colors"><span class="font-serif font-bold text-warm-400 text-sm text-center">زين</span></div>
                <div class="h-24 rounded-xl border border-sand bg-ivory flex items-center justify-center hover:border-terracotta/30 transition-colors"><span class="font-serif font-bold text-warm-400 text-sm text-center">mobily</span></div>
                <div class="h-24 rounded-xl border border-sand bg-ivory flex items-center justify-center hover:border-terracotta/30 transition-colors"><span class="font-serif font-bold text-warm-400 text-sm text-center">الوقف</span></div>
                <div class="h-24 rounded-xl border border-sand bg-ivory flex items-center justify-center hover:border-terracotta/30 transition-colors"><span class="font-serif font-bold text-warm-400 text-sm text-center">neom</span></div>
            </div>
        </div>
    </section>


    <!-- BLOG -->
    <section id="blog" class="py-24 md:py-40 bg-cream/60">
        <div class="max-w-[1400px] mx-auto px-6 md:px-12">
            <div class="flex flex-wrap items-end justify-between gap-6 mb-16">
                <div>
                    <span class="reveal text-terracotta text-sm font-bold tracking-[0.15em]">المدونة</span>
                    <h2 class="reveal reveal-delay-1 font-serif text-3xl md:text-5xl font-bold text-warm-900 mt-4">قراءات <span class="text-terracotta">إبداعية</span></h2>
                </div>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <article class="reveal card-lift group">
                    <div class="img-reveal rounded-2xl overflow-hidden aspect-[3/2] mb-6"><img src="https://picsum.photos/seed/blog-logo-design/600/400.jpg" alt="" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"></div>
                    <span class="text-terracotta text-xs font-bold tracking-wider">التصميم</span>
                    <h3 class="font-serif text-xl font-bold mt-2 mb-3 group-hover:text-terracotta transition-colors leading-snug">أسرار تصميم الشعار الناجح: دليلك الشامل لعام ٢٠٢٤</h3>
                    <p class="text-sm text-warm-500 leading-relaxed mb-4">اكتشف أحدث اتجاهات تصميم الشعارات وكيفية إنشاء شعار يعبر عن هوية علامتك بفعالية.</p>
                    <span class="text-xs text-warm-400">١٥ يناير ٢٠٢٤</span>
                </article>
                <article class="reveal reveal-delay-1 card-lift group">
                    <div class="img-reveal rounded-2xl overflow-hidden aspect-[3/2] mb-6"><img src="https://picsum.photos/seed/blog-materials/600/400.jpg" alt="" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"></div>
                    <span class="text-olive-600 text-xs font-bold tracking-wider">الطباعة</span>
                    <h3 class="font-serif text-xl font-bold mt-2 mb-3 group-hover:text-olive-600 transition-colors leading-snug">كيف تختار الخامة المناسبة لمشروعك الطباعي؟</h3>
                    <p class="text-sm text-warm-500 leading-relaxed mb-4">دليل شامل لأنواع الخامات الطباعية ومتى تستخدم كل نوع للحصول على أفضل النتائج.</p>
                    <span class="text-xs text-warm-400">٢٨ فبراير ٢٠٢٤</span>
                </article>
                <article class="reveal reveal-delay-2 card-lift group">
                    <div class="img-reveal rounded-2xl overflow-hidden aspect-[3/2] mb-6"><img src="https://picsum.photos/seed/blog-brand-guide/600/400.jpg" alt="" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"></div>
                    <span class="text-brand-blue text-xs font-bold tracking-wider">البراندنج</span>
                    <h3 class="font-serif text-xl font-bold mt-2 mb-3 group-hover:text-brand-blue transition-colors leading-snug">دليل بناء الهوية البصرية من الصفر</h3>
                    <p class="text-sm text-warm-500 leading-relaxed mb-4">خطوات عملية لبناء هوية بصرية متكاملة لعلامتك تبدأ من الشعار وحتى التطبيقات.</p>
                    <span class="text-xs text-warm-400">٢٠ أبريل ٢٠٢٤</span>
                </article>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faq" class="py-24 md:py-32 bg-cream/60">
        <div class="max-w-3xl mx-auto px-6 md:px-12">
            <div class="text-center mb-16">
                <span class="reveal text-terracotta text-sm font-bold tracking-[0.15em]">أسئلة شائعة</span>
                <h2 class="reveal reveal-delay-1 font-serif text-3xl md:text-4xl font-bold text-warm-900 mt-4">كل ما تريد <span class="text-terracotta">معرفته</span></h2>
            </div>
            <div class="space-y-3">

                @forelse($faqs as $faq)
                <div class="accordion-item reveal bg-ivory border border-sand rounded-xl overflow-hidden">
                    <button onclick="toggleAccordion(this)" class="w-full flex items-center justify-between p-6 text-right"><span class="font-bold text-warm-800">{{ $faq->question_ar }}</span><i class="fas fa-chevron-down accordion-arrow text-terracotta text-sm"></i></button>
                    <div class="accordion-body">
                        <p class="px-6 pb-6 text-warm-500 text-sm leading-relaxed">{{ $faq->answer_ar }}</p>
                    </div>
                </div>
                @empty
                <div class="text-center py-10 border border-dashed border-gray-800 rounded-lg">
                    <p class="text-gray-500">لا توجد أسئلة شائعة حالياً.</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>


    <!-- CAREERS -->
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

                <!-- Job Card 1 -->
                <div class="reveal card-lift group">
                    <div class="bg-white/[0.06] backdrop-blur-2xl border border-white/[0.08] rounded-3xl p-6 md:p-8 hover:border-terracotta/30 hover:bg-white/[0.09] transition-all duration-500 h-full flex flex-col shadow-2xl">
                        <!-- Header Tags -->
                        <div class="flex items-center gap-2 mb-5">
                            <span class="px-3 py-1.5 rounded-lg bg-olive-400/15 text-olive-200 text-[11px] font-bold tracking-wide backdrop-blur-sm">التصميم</span>
                            <span class="px-3 py-1.5 rounded-lg bg-terracotta/20 text-terracotta text-[11px] font-bold tracking-wide backdrop-blur-sm">دوام كامل</span>
                        </div>
                        <!-- Title -->
                        <h3 class="font-serif text-2xl font-bold text-ivory mb-3 group-hover:text-terracotta transition-colors">مصمم جرافيك أول</h3>
                        <!-- Description -->
                        <p class="text-sm text-warm-300 leading-relaxed mb-6 flex-grow">خبرة ٥+ سنوات في التصميم الإبداعي والهويات البصرية، إجادة تامة لـ Adobe Creative Suite والقدرة على قيادة فريق تصميم.</p>
                        <!-- Meta -->
                        <div class="flex items-center gap-5 text-xs text-warm-400 mb-6">
                            <div class="flex items-center gap-1.5"><i class="fas fa-map-marker-alt text-terracotta/70"></i> الرياض</div>
                            <div class="flex items-center gap-1.5"><i class="fas fa-briefcase text-olive-400/70"></i> ٥+ سنوات</div>
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

                <!-- Job Card 2 -->
                <div class="reveal reveal-delay-1 card-lift group">
                    <div class="bg-white/[0.06] backdrop-blur-2xl border border-white/[0.08] rounded-3xl p-6 md:p-8 hover:border-terracotta/30 hover:bg-white/[0.09] transition-all duration-500 h-full flex flex-col shadow-2xl">
                        <div class="flex items-center gap-2 mb-5">
                            <span class="px-3 py-1.5 rounded-lg bg-brand-blue/20 text-blue-300 text-[11px] font-bold tracking-wide backdrop-blur-sm">التسويق</span>
                            <span class="px-3 py-1.5 rounded-lg bg-terracotta/20 text-terracotta text-[11px] font-bold tracking-wide backdrop-blur-sm">دوام كامل</span>
                        </div>
                        <h3 class="font-serif text-2xl font-bold text-ivory mb-3 group-hover:text-terracotta transition-colors">أخصائي تسويق رقمي</h3>
                        <p class="text-sm text-warm-300 leading-relaxed mb-6 flex-grow">إدارة الحملات الإعلانية على المنصات المختلفة وتحليل البيانات لتحسين الأداء وزيادة العائد على الاستثمار.</p>
                        <div class="flex items-center gap-5 text-xs text-warm-400 mb-6">
                            <div class="flex items-center gap-1.5"><i class="fas fa-map-marker-alt text-terracotta/70"></i> الرياض</div>
                            <div class="flex items-center gap-1.5"><i class="fas fa-briefcase text-olive-400/70"></i> ٣+ سنوات</div>
                        </div>
                        <div class="border-t border-white/[0.06] pt-5">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="flex -space-x-2 rtl:space-x-reverse">
                                        <img src="https://picsum.photos/seed/emp-mkt1/80/80.jpg" class="w-9 h-9 rounded-full border-2 border-warm-800 object-cover" alt="">
                                        <img src="https://picsum.photos/seed/emp-mkt2/80/80.jpg" class="w-9 h-9 rounded-full border-2 border-warm-800 object-cover" alt="">
                                        <div class="w-9 h-9 rounded-full bg-white/10 backdrop-blur-sm flex items-center justify-center border-2 border-warm-800 text-warm-300 text-[10px] font-bold">+2</div>
                                    </div>
                                    <div>
                                        <span class="text-xs font-bold text-warm-200 block leading-tight">فريق التسويق</span>
                                        <span class="text-[10px] text-warm-400">٤ أعضاء</span>
                                    </div>
                                </div>
                                <a href="#quote" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-terracotta text-ivory text-xs font-bold hover:bg-ivory hover:text-warm-800 transition-all duration-300 group/btn">
                                    قدم الآن <i class="fas fa-arrow-left text-[10px] group-hover/btn:-translate-x-0.5 transition-transform"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Job Card 3 -->
                <div class="reveal card-lift group">
                    <div class="bg-white/[0.06] backdrop-blur-2xl border border-white/[0.08] rounded-3xl p-6 md:p-8 hover:border-olive-400/30 hover:bg-white/[0.09] transition-all duration-500 h-full flex flex-col shadow-2xl">
                        <div class="flex items-center gap-2 mb-5">
                            <span class="px-3 py-1.5 rounded-lg bg-olive-400/15 text-olive-200 text-[11px] font-bold tracking-wide backdrop-blur-sm">الإنتاج</span>
                            <span class="px-3 py-1.5 rounded-lg bg-terracotta/20 text-terracotta text-[11px] font-bold tracking-wide backdrop-blur-sm">دوام كامل</span>
                        </div>
                        <h3 class="font-serif text-2xl font-bold text-ivory mb-3 group-hover:text-olive-200 transition-colors">مشرف طباعة</h3>
                        <p class="text-sm text-warm-300 leading-relaxed mb-6 flex-grow">خبرة واسعة في أجهزة الطباعة الديجيتال الكبيرة والصغيرة مع القدرة على إدارة فريق وتحقيق أهداف الإنتاج اليومية.</p>
                        <div class="flex items-center gap-5 text-xs text-warm-400 mb-6">
                            <div class="flex items-center gap-1.5"><i class="fas fa-map-marker-alt text-terracotta/70"></i> الرياض</div>
                            <div class="flex items-center gap-1.5"><i class="fas fa-briefcase text-olive-400/70"></i> ٧+ سنوات</div>
                        </div>
                        <div class="border-t border-white/[0.06] pt-5">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="flex -space-x-2 rtl:space-x-reverse">
                                        <img src="https://picsum.photos/seed/emp-prod1/80/80.jpg" class="w-9 h-9 rounded-full border-2 border-warm-800 object-cover" alt="">
                                        <img src="https://picsum.photos/seed/emp-prod2/80/80.jpg" class="w-9 h-9 rounded-full border-2 border-warm-800 object-cover" alt="">
                                        <img src="https://picsum.photos/seed/emp-prod3/80/80.jpg" class="w-9 h-9 rounded-full border-2 border-warm-800 object-cover" alt="">
                                        <div class="w-9 h-9 rounded-full bg-white/10 backdrop-blur-sm flex items-center justify-center border-2 border-warm-800 text-warm-300 text-[10px] font-bold">+8</div>
                                    </div>
                                    <div>
                                        <span class="text-xs font-bold text-warm-200 block leading-tight">فريق الإنتاج</span>
                                        <span class="text-[10px] text-warm-400">١١ عضو</span>
                                    </div>
                                </div>
                                <a href="#quote" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-olive-600 text-ivory text-xs font-bold hover:bg-ivory hover:text-warm-800 transition-all duration-300 group/btn">
                                    قدم الآن <i class="fas fa-arrow-left text-[10px] group-hover/btn:-translate-x-0.5 transition-transform"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Job Card 4 -->
                <div class="reveal reveal-delay-1 card-lift group">
                    <div class="bg-white/[0.06] backdrop-blur-2xl border border-white/[0.08] rounded-3xl p-6 md:p-8 hover:border-brand-blue/30 hover:bg-white/[0.09] transition-all duration-500 h-full flex flex-col shadow-2xl">
                        <div class="flex items-center gap-2 mb-5">
                            <span class="px-3 py-1.5 rounded-lg bg-brand-blue/20 text-blue-300 text-[11px] font-bold tracking-wide backdrop-blur-sm">الإدارة</span>
                            <span class="px-3 py-1.5 rounded-lg bg-terracotta/20 text-terracotta text-[11px] font-bold tracking-wide backdrop-blur-sm">دوام كامل</span>
                        </div>
                        <h3 class="font-serif text-2xl font-bold text-ivory mb-3 group-hover:text-blue-300 transition-colors">مدير مشاريع</h3>
                        <p class="text-sm text-warm-300 leading-relaxed mb-6 flex-grow">إدارة مشاريع الطباعة والتصميم من البداية حتى التسليم مع مهارات تواصل ممتازة والقدرة على التعامل مع العملاء مباشرة.</p>
                        <div class="flex items-center gap-5 text-xs text-warm-400 mb-6">
                            <div class="flex items-center gap-1.5"><i class="fas fa-map-marker-alt text-terracotta/70"></i> جدة</div>
                            <div class="flex items-center gap-1.5"><i class="fas fa-briefcase text-olive-400/70"></i> ٤+ سنوات</div>
                        </div>
                        <div class="border-t border-white/[0.06] pt-5">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="flex -space-x-2 rtl:space-x-reverse">
                                        <img src="https://picsum.photos/seed/emp-pm1/80/80.jpg" class="w-9 h-9 rounded-full border-2 border-warm-800 object-cover" alt="">
                                        <div class="w-9 h-9 rounded-full bg-white/10 backdrop-blur-sm flex items-center justify-center border-2 border-warm-800 text-warm-300 text-[10px] font-bold">+1</div>
                                    </div>
                                    <div>
                                        <span class="text-xs font-bold text-warm-200 block leading-tight">فريق العمليات</span>
                                        <span class="text-[10px] text-warm-400">٢ عضو</span>
                                    </div>
                                </div>
                                <a href="#quote" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-brand-blue text-ivory text-xs font-bold hover:bg-ivory hover:text-warm-800 transition-all duration-300 group/btn">
                                    قدم الآن <i class="fas fa-arrow-left text-[10px] group-hover/btn:-translate-x-0.5 transition-transform"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Bottom CTA -->
            <div class="reveal text-center mt-14">
                <p class="text-warm-300 text-sm mb-5">لم تجد الوظيفة المناسبة؟ أرسل سيرتك الذاتية وسنتواصل معك عند توفر فرصة</p>
                <a href="#contact" class="inline-flex items-center gap-2 px-8 py-3.5 border-2 border-white/15 text-warm-200 font-bold rounded-full hover:border-terracotta hover:text-terracotta transition-all duration-400">
                    <i class="fas fa-envelope text-sm"></i> أرسل سيرتك الذاتية
                </a>
            </div>
        </div>
    </section>


    <!-- CTA -->
    <section class="py-24 md:py-32 relative overflow-hidden">
        <div class="absolute inset-0">
            <img src="cta.jpg" alt="" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-warm-800/50"></div>
        </div>
        <div class="max-w-3xl mx-auto px-6 md:px-12 text-center relative z-10">
            <div class="reveal">
                <h2 class="font-serif text-3xl md:text-5xl font-bold text-ivory mb-6 leading-[1.2]">جاهز لبدء<br>مشروعك القادم؟</h2>
                <p class="text-warm-300 text-lg mb-10 leading-relaxed">تواصل معنا اليوم واحصل على استشارة مجانية وعرض سعر مخصص</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="#quote" class="group inline-flex items-center gap-3 px-8 py-4 bg-terracotta text-ivory font-bold rounded-full hover:bg-olive-600 transition-all duration-400">
                        اطلب عرض سعر
                        <span class="w-8 h-8 rounded-full bg-white/20 flex items-center justify-center group-hover:-translate-x-1 transition-transform"><i class="fas fa-arrow-left text-xs"></i></span>
                    </a>
                    <a href="#contact" class="inline-flex items-center gap-2 px-8 py-4 border-2 border-warm-400/30 text-ivory font-bold rounded-full hover:border-terracotta hover:text-terracotta transition-all duration-400">تواصل معنا</a>
                </div>
            </div>
        </div>
    </section>


    <!-- CONTACT -->
    <section id="contact" class="py-24 md:py-40">
        <div class="max-w-[1400px] mx-auto px-6 md:px-12">
            <div class="text-center mb-20">
                <span class="reveal text-terracotta text-sm font-bold tracking-[0.15em]">تواصل معنا</span>
                <h2 class="reveal reveal-delay-1 font-serif text-3xl md:text-5xl font-bold text-warm-900 mt-4">نحب أن <span class="text-terracotta">نسمع</span> منك</h2>
            </div>
            <div class="grid lg:grid-cols-5 gap-12 md:gap-16">
                <div class="lg:col-span-2 space-y-8">
                    <div class="reveal flex items-start gap-5">
                        <div class="w-12 h-12 rounded-full bg-terracotta/10 flex items-center justify-center flex-shrink-0"><i class="fas fa-phone text-terracotta"></i></div>
                        <div>
                            <h4 class="font-bold mb-1">الهاتف</h4>
                            <p class="text-sm text-warm-500">{{ $setting->mobile }}</p>
                            <p class="text-xs text-warm-400 mt-1">{{ $setting->hours_ar }}</p>
                        </div>
                    </div>
                    <div class="reveal reveal-delay-1 flex items-start gap-5">
                        <div class="w-12 h-12 rounded-full bg-olive-100 flex items-center justify-center flex-shrink-0"><i class="fas fa-envelope text-olive-600"></i></div>
                        <div>
                            <h4 class="font-bold mb-1">البريد الإلكتروني</h4>
                            <p class="text-sm text-warm-500">{{ $setting->email }}</p>
                            <p class="text-xs text-warm-400 mt-1">نرد خلال ٢٤ ساعة</p>
                        </div>
                    </div>
                    <div class="reveal reveal-delay-2 flex items-start gap-5">
                        <div class="w-12 h-12 rounded-full bg-brand-blue/10 flex items-center justify-center flex-shrink-0"><i class="fas fa-location-dot text-brand-blue"></i></div>
                        <div>
                            <h4 class="font-bold mb-1">العنوان</h4>
                            <p class="text-sm text-warm-500">{{ $setting->address_ar }}</p>
                        </div>
                    </div>
                    <div class="reveal reveal-delay-3">
                        <a href="https://wa.me/2{{ $setting->whatsapp }}" target="_blank" class="flex items-center gap-4 p-4 rounded-xl bg-olive-50 border border-olive-200 hover:bg-olive-100 transition-colors">
                            <div class="w-10 h-10 rounded-full bg-olive-600 flex items-center justify-center text-ivory"><i class="fab fa-whatsapp text-lg"></i></div>
                            <div><span class="font-bold text-sm">تواصل عبر واتساب</span><span class="block text-xs text-warm-400">للرد السريع</span></div>
                        </a>
                    </div>
                </div>
                <div class="lg:col-span-3">
                    <form onsubmit="submitForm(event)" class="reveal bg-ivory border border-sand rounded-2xl p-8 md:p-10 space-y-5">
                        <div class="grid sm:grid-cols-2 gap-5">
                            <div><label class="block text-sm font-bold text-warm-700 mb-2">الاسم</label><input type="text" required class="w-full px-4 py-3 rounded-xl border border-sand bg-cream/50 text-sm focus:border-terracotta focus:ring-1 focus:ring-terracotta/20 outline-none transition-all" placeholder="الاسم الكامل"></div>
                            <div><label class="block text-sm font-bold text-warm-700 mb-2">البريد الإلكتروني</label><input type="email" required class="w-full px-4 py-3 rounded-xl border border-sand bg-cream/50 text-sm focus:border-terracotta focus:ring-1 focus:ring-terracotta/20 outline-none transition-all" placeholder="email@example.com"></div>
                        </div>
                        <div class="grid sm:grid-cols-2 gap-5">
                            <div><label class="block text-sm font-bold text-warm-700 mb-2">الهاتف</label><input type="tel" class="w-full px-4 py-3 rounded-xl border border-sand bg-cream/50 text-sm focus:border-terracotta focus:ring-1 focus:ring-terracotta/20 outline-none transition-all" placeholder="+966 5X XXX XXXX"></div>
                            <div><label class="block text-sm font-bold text-warm-700 mb-2">الموضوع</label><select class="w-full px-4 py-3 rounded-xl border border-sand bg-cream/50 text-sm focus:border-terracotta focus:ring-1 focus:ring-terracotta/20 outline-none transition-all">
                                    <option>استفسار عام</option>
                                    <option>طلب عرض سعر</option>
                                    <option>متابعة طلب</option>
                                </select></div>
                        </div>
                        <div><label class="block text-sm font-bold text-warm-700 mb-2">رسالتك</label><textarea rows="5" required class="w-full px-4 py-3 rounded-xl border border-sand bg-cream/50 text-sm focus:border-terracotta focus:ring-1 focus:ring-terracotta/20 outline-none transition-all resize-none" placeholder="أخبرنا عن مشروعك..."></textarea></div>
                        <button type="submit" class="w-full py-4 bg-terracotta text-ivory font-bold rounded-full hover:bg-warm-800 transition-all duration-300 flex items-center justify-center gap-2"><i class="fas fa-paper-plane text-sm"></i> إرسال الرسالة</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- QUOTE -->
    <section id="quote" class="py-24 md:py-32 bg-primary relative overflow-hidden">
        <div class="max-w-3xl mx-auto px-6 md:px-12 relative z-10">
            <div class="text-center mb-12">
                <span class="reveal text-terracotta text-sm font-bold tracking-[0.15em]">عرض سعر</span>
                <h2 class="reveal reveal-delay-1 font-serif text-3xl md:text-4xl font-bold text-warm-900 mt-4">أخبرنا عن <span class="text-terracotta">مشروعك</span></h2>
                <p class="reveal reveal-delay-2 text-warm-500 mt-3">املأ النموذج وسنقدم لك عرض سعر مخصص خلال ٢٤ ساعة</p>
            </div>
            <form onsubmit="submitForm(event)" class="reveal bg-ivory/80 backdrop-blur-sm border border-sand rounded-2xl p-8 md:p-10 space-y-5 shadow-2xl">
                <div class="grid sm:grid-cols-2 gap-5">
                    <div><label class="block text-sm font-bold text-warm-700 mb-2">الاسم *</label><input type="text" required class="w-full px-4 py-3 rounded-xl border border-sand bg-cream/70 text-sm focus:border-terracotta outline-none transition-all"></div>
                    <div><label class="block text-sm font-bold text-warm-700 mb-2">الشركة</label><input type="text" class="w-full px-4 py-3 rounded-xl border border-sand bg-cream/70 text-sm focus:border-terracotta outline-none transition-all"></div>
                </div>
                <div class="grid sm:grid-cols-2 gap-5">
                    <div><label class="block text-sm font-bold text-warm-700 mb-2">الهاتف *</label><input type="tel" required class="w-full px-4 py-3 rounded-xl border border-sand bg-cream/70 text-sm focus:border-terracotta outline-none transition-all"></div>
                    <div><label class="block text-sm font-bold text-warm-700 mb-2">البريد الإلكتروني *</label><input type="email" required class="w-full px-4 py-3 rounded-xl border border-sand bg-cream/70 text-sm focus:border-terracotta outline-none transition-all"></div>
                </div>
                <div><label class="block text-sm font-bold text-warm-700 mb-2">نوع الخدمة *</label>
                    <select required class="w-full px-4 py-3 rounded-xl border border-sand bg-cream/70 text-sm focus:border-terracotta outline-none transition-all">
                        <option value="">اختر نوع الخدمة</option>
                        <option>الطباعة الديجيتال</option>
                        <option>تصميم الهوية البصرية</option>
                        <option>تصميم السوشيال ميديا</option>
                        <option>اللوحات الإعلانية</option>
                        <option>الهدايا الدعائية</option>
                        <option>التغليف والعبوات</option>
                        <option>الطباعة بمقاسات كبيرة</option>
                        <option>الحملات التسويقية</option>
                    </select>
                </div>
                <button type="submit" class="w-full py-4 bg-terracotta text-ivory font-bold rounded-full hover:bg-warm-800 transition-all duration-300 flex items-center justify-center gap-2"><i class="fas fa-paper-plane text-sm"></i> إرسال طلب عرض السعر</button>
            </form>
        </div>
    </section>
    @include('includes.footer')
