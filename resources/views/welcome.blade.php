@section('title', 'بريكس - حلول الطباعة المتكاملة')
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
@include(' includes.about')


<!-- VALUES -->
<section class="value-bg py-24 md:py-32 bg-cream/60">
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
@include('includes.services')
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
            <form id="testi-form" action="{{ route('testimonials.store') }}" method="POST" class="contact-bg-form bg-ivory/80 backdrop-blur-md border border-sand/50 rounded-2xl p-8 md:p-10 space-y-5 shadow-xl">
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

        <div class="reveal grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6">
            @foreach($brands as $brand)

            <a href="{{ $brand->url ?? '#' }}" target="_blank"
                class="group relative bg-white rounded-2xl border border-gray-100 p-6 flex flex-col items-center justify-center shadow-sm transition-all duration-300 hover:shadow-xl hover:-translate-y-1 hover:border-terracotta/40 aspect-[4/3]">

                <div class="w-16 h-16 md:w-20 md:h-20 flex items-center justify-center mb-3 transition-transform duration-300 group-hover:scale-110">
                    @if($brand->image)
                    <img src="{{ Storage::url($brand->image) }}" alt="{{ $brand->name }}" class="w-full h-full object-contain">
                    @else
                    <div class="w-full h-full rounded-full bg-gray-100 flex items-center justify-center text-gray-400">
                        <i class="fas fa-building text-2xl"></i>
                    </div>
                    @endif
                </div>

                <h4 class="font-serif font-bold text-warm-900 text-sm text-center transition-colors duration-300 group-hover:text-terracotta line-clamp-1">
                    {{ $brand->name }}
                </h4>

                <div class="absolute top-3 left-3 opacity-0 group-hover:opacity-100 transform -translate-y-1 group-hover:translate-y-0 transition-all duration-300 text-terracotta">
                    <i class="fas fa-external-link-alt text-xs"></i>
                </div>

            </a>

            @endforeach
        </div>
    </div>
</section>


<!-- BLOG -->
@include('includes.blog')

<!-- FAQ -->
<section id="faq" class="faq-bg py-24 md:py-32 bg-cream/60">
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
@include('includes.careers')
<!-- CONTACT -->
@include('includes.contact')
<!-- QUOTE -->
@include('includes.quote')

@include('includes.footer')
