@section('title', 'بريكس - حلول الطباعة المتكاملة')
@include('includes.header')




<!-- HERO -->
<section id="hero" class="relative min-h-[720px] flex items-center overflow-hidden bg-cream">
    <div class="absolute inset-0">
        @php
$image = $heroImage?->path
    ? asset('storage/' . $heroImage->path)
    : asset('images-layout/default-hero.png');
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

<!-- VALUES -->
<section class="value-bg py-20 md:py-28 bg-cream/60">
    <div class="max-w-[1400px] mx-auto px-6 md:px-12">
        <div class="text-center mb-14">
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
<section class="py-20 md:py-28 relative overflow-hidden">
    <!-- Gradient Background -->
    <div class="absolute inset-0 bg-[#E7F0EA]"></div>

    <!-- Organic Flowing Curves (SVG) -->
    <div class="hidden">
        <svg class="absolute top-0 right-0 w-full h-full opacity-10" viewBox="0 0 1440 900" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1440 0C1200 100 900 50 700 200C500 350 300 200 0 300V900H1440V0Z" fill="url(#curve1)" />
            <path d="M1440 150C1100 250 800 100 600 300C400 500 200 350 0 450V900H1440V150Z" fill="url(#curve2)" />
            <path d="M1440 400C1000 500 700 350 500 500C300 650 100 550 0 600V900H1440V400Z" fill="url(#curve3)" />
            <defs>
                <linearGradient id="curve1" x1="0" y1="0" x2="1440" y2="900" gradientUnits="userSpaceOnUse">
                    <stop offset="0%" stop-color="#6F8F7A" />
                    <stop offset="50%" stop-color="#66706C" />
                    <stop offset="100%" stop-color="#587061" />
                </linearGradient>
                <linearGradient id="curve2" x1="1440" y1="0" x2="0" y2="900" gradientUnits="userSpaceOnUse">
                    <stop offset="0%" stop-color="#6F8F7A" />
                    <stop offset="50%" stop-color="#66706C" />
                    <stop offset="100%" stop-color="#587061" />
                </linearGradient>
                <linearGradient id="curve3" x1="0" y1="900" x2="1440" y2="0" gradientUnits="userSpaceOnUse">
                    <stop offset="0%" stop-color="#66706C" stop-opacity="0.6" />
                    <stop offset="100%" stop-color="#6F8F7A" stop-opacity="0.3" />
                </linearGradient>
            </defs>
        </svg>
    </div>

    <!-- Floating Circles -->
    <div class="absolute top-20 right-20 w-72 h-72 bg-white/60 rounded-full blur-3xl"></div>
    <div class="absolute bottom-20 left-20 w-96 h-96 bg-white/60 rounded-full blur-3xl"></div>

    <!-- Grid Overlay -->
    <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(circle, #6F8F7A 1px, transparent 1px); background-size: 30px 30px;"></div>

    <!-- Content -->
    <div class="max-w-[1400px] mx-auto px-6 md:px-12 relative z-10">
        <div class="text-center mb-14">
            <span class="reveal text-warm-500 text-sm font-medium tracking-[0.12em]">مراحل العمل</span>
            <h2 class="reveal reveal-delay-1 font-serif text-3xl md:text-5xl font-semibold text-warm-900 mt-4">شفافية في كل <span class="text-terracotta">خطوة</span></h2>
            <p class="reveal reveal-delay-2 text-warm-500 text-lg mt-4 max-w-xl mx-auto">نعمل بعملية واضحة ومحددة حتى تعرف بالضبط أين وصل مشروعك</p>
        </div>

        <div class="relative">
            <!-- Connection Line -->
            <div class="hidden md:block absolute top-[52px] right-[10%] left-[10%] h-[2px]">
                <div class="w-full h-full bg-[#CBDACF] rounded-full"></div>
                <div class="absolute top-0 right-0 h-full w-0 bg-[#91A997] rounded-full animate-[lineGrow_3s_ease-out_forwards]"></div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-5 gap-8 md:gap-6">
                <!-- Step 1 -->
                <div class="reveal text-center">
                    <div class="relative mx-auto mb-6 w-[104px]">
                        <div class="w-[104px] h-[104px] rounded-full border border-[#CAD9CF] bg-white/60 flex items-center justify-center">
                            <div class="w-[88px] h-[88px] rounded-full bg-[#D5E4DA] flex items-center justify-center">
                                <span class="font-serif text-3xl font-bold text-warm-900">١</span>
                            </div>
                        </div>
                        <div class="absolute -bottom-1 -right-1 w-7 h-7 rounded-full bg-white shadow-md flex items-center justify-center">
                            <i class="fas fa-ear-listen text-[#6F8F7A] text-[10px]"></i>
                        </div>
                    </div>
                    <h4 class="font-serif text-lg font-bold mb-2 text-warm-900">استماع</h4>
                    <p class="text-sm text-warm-500 leading-relaxed">نفهم احتياجك بدقة ونسأل الأسئلة الصحيحة</p>
                </div>

                <!-- Step 2 -->
                <div class="reveal reveal-delay-1 text-center">
                    <div class="relative mx-auto mb-6 w-[104px]">
                        <div class="w-[104px] h-[104px] rounded-full border border-[#CAD9CF] bg-white/60 flex items-center justify-center">
                            <div class="w-[88px] h-[88px] rounded-full bg-[#D5E4DA] flex items-center justify-center">
                                <span class="font-serif text-3xl font-bold text-warm-900">٢</span>
                            </div>
                        </div>
                        <div class="absolute -bottom-1 -right-1 w-7 h-7 rounded-full bg-white shadow-md flex items-center justify-center">
                            <i class="fas fa-pencil-ruler text-[#6F8F7A] text-[10px]"></i>
                        </div>
                    </div>
                    <h4 class="font-serif text-lg font-bold mb-2 text-warm-900">تصميم</h4>
                    <p class="text-sm text-warm-500 leading-relaxed">نبتكر حلولاً بصرية تعبر عن رؤيتك بصدق</p>
                </div>

                <!-- Step 3 -->
                <div class="reveal reveal-delay-2 text-center">
                    <div class="relative mx-auto mb-6 w-[104px]">
                        <div class="w-[104px] h-[104px] rounded-full border border-[#CAD9CF] bg-white/60 flex items-center justify-center">
                            <div class="w-[88px] h-[88px] rounded-full bg-[#D5E4DA] flex items-center justify-center">
                                <span class="font-serif text-3xl font-bold text-warm-900">٣</span>
                            </div>
                        </div>
                        <div class="absolute -bottom-1 -right-1 w-7 h-7 rounded-full bg-white shadow-md flex items-center justify-center">
                            <i class="fas fa-check-double text-[#6F8F7A] text-[10px]"></i>
                        </div>
                    </div>
                    <h4 class="font-serif text-lg font-bold mb-2 text-warm-900">مراجعة</h4>
                    <p class="text-sm text-warm-500 leading-relaxed">نراجع معك ونعدل حتى الرضا التام</p>
                </div>

                <!-- Step 4 -->
                <div class="reveal reveal-delay-3 text-center">
                    <div class="relative mx-auto mb-6 w-[104px]">
                        <div class="w-[104px] h-[104px] rounded-full border border-[#CAD9CF] bg-white/60 flex items-center justify-center">
                            <div class="w-[88px] h-[88px] rounded-full bg-[#D5E4DA] flex items-center justify-center">
                                <span class="font-serif text-3xl font-bold text-warm-900">٤</span>
                            </div>
                        </div>
                        <div class="absolute -bottom-1 -right-1 w-7 h-7 rounded-full bg-white shadow-md flex items-center justify-center">
                            <i class="fas fa-industry text-[#6F8F7A] text-[10px]"></i>
                        </div>
                    </div>
                    <h4 class="font-serif text-lg font-bold mb-2 text-warm-900">إنتاج</h4>
                    <p class="text-sm text-warm-500 leading-relaxed">تنفيذ بأعلى معايير الجودة والتقنية</p>
                </div>

                <!-- Step 5 -->
                <div class="reveal reveal-delay-4 text-center col-span-2 md:col-span-1">
                    <div class="relative mx-auto mb-6 w-[104px]">
                        <div class="w-[104px] h-[104px] rounded-full border border-[#CAD9CF] bg-white/60 flex items-center justify-center">
                            <div class="w-[88px] h-[88px] rounded-full bg-[#D5E4DA] flex items-center justify-center">
                                <span class="font-serif text-3xl font-bold text-warm-900">٥</span>
                            </div>
                        </div>
                        <div class="absolute -bottom-1 -right-1 w-7 h-7 rounded-full bg-white shadow-md flex items-center justify-center">
                            <i class="fas fa-truck-fast text-[#6F8F7A] text-[10px]"></i>
                        </div>
                    </div>
                    <h4 class="font-serif text-lg font-bold mb-2 text-warm-900">تسليم</h4>
                    <p class="text-sm text-warm-500 leading-relaxed">نسلمك المشروع ونتابع النتائج معك</p>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- TESTIMONIALS -->
<section class="py-20 md:py-28 relative overflow-hidden" id="testimonials">
    <!-- Background Image Layer -->
    <div class="absolute inset-0 bg-ivory">
        <!-- الطبقة ١: تدرج لوني بألوان البراند الأساسية (البرتقالي والأزرق) -->
        <div class="absolute inset-0 bg-gradient-to-tr from-[#6F8F7A]/10 via-transparent to-[#66706C]/10"></div>

        <!-- الطبقة ٢: صورة طابع الطباعة والأحبار (محولة للرمادي ومزوجة كحبر) -->
        <img src="testimonial.jpg" alt="" class="absolute inset-0 w-full h-full object-cover opacity-[0.08] mix-blend-multiply grayscale">

        <!-- الطبقة ٣: نقاط بناتق CMYK (أقرب شيء للطباعة الديجيتال) -->
        <div class="absolute inset-0 bg-print-halftone"></div>
    </div>

    <div class="relative z-10 max-w-[1400px] mx-auto px-6 md:px-12">
        <div class="text-center mb-14">
            <span class="reveal text-terracotta text-sm font-bold tracking-[0.15em]">أصوات عملائنا</span>
            <h2 class="reveal reveal-delay-1 font-serif text-3xl md:text-5xl font-bold text-warm-900 mt-4">قصص <span class="text-terracotta">حقيقية</span></h2>
        </div>

        <div class="grid lg:grid-cols-5 gap-8 lg:gap-10 items-stretch">

        <!-- Slider -->
        <div class="reveal relative lg:col-span-3 min-w-0 flex flex-col">
            <div id="testi-slider" class="overflow-hidden rounded-2xl flex-1">
                <div id="testi-track" class="flex h-full transition-transform duration-700 ease-out">
                    <!-- Slide 1 -->
                    <div class="w-full h-full flex-shrink-0">
                        <div class="h-full min-h-[520px] bg-white border border-sand rounded-2xl p-8 md:p-12 flex flex-col md:flex-row justify-center md:items-center md:gap-10">
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
                    <div class="w-full h-full flex-shrink-0">
                        <div class="h-full min-h-[520px] bg-white border border-sand rounded-2xl p-8 md:p-12 flex flex-col md:flex-row justify-center md:items-center md:gap-10">
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
                    <div class="w-full h-full flex-shrink-0">
                        <div class="h-full min-h-[520px] bg-white border border-sand rounded-2xl p-8 md:p-12 flex flex-col md:flex-row justify-center md:items-center md:gap-10">
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
            <button onclick="slideTesti(-1)" class="absolute top-1/2 -translate-y-1/2 right-3 w-10 h-10 rounded-xl bg-white/90 backdrop-blur-sm border border-sand flex items-center justify-center text-warm-600 hover:bg-terracotta hover:text-warm-800 hover:border-terracotta transition-all z-10"><i class="fas fa-chevron-right text-xs"></i></button>
            <button onclick="slideTesti(1)" class="absolute top-1/2 -translate-y-1/2 left-3 w-10 h-10 rounded-xl bg-white/90 backdrop-blur-sm border border-sand flex items-center justify-center text-warm-600 hover:bg-terracotta hover:text-warm-800 hover:border-terracotta transition-all z-10"><i class="fas fa-chevron-left text-xs"></i></button>
            <!-- Dots -->
            <div id="testi-dots" class="flex justify-center gap-2 mt-8">
                <button onclick="goToSlide(0)" class="testi-dot w-3 h-3 rounded-full bg-terracotta transition-all"></button>
                <button onclick="goToSlide(1)" class="testi-dot w-3 h-3 rounded-full bg-sand transition-all"></button>
                <button onclick="goToSlide(2)" class="testi-dot w-3 h-3 rounded-full bg-sand transition-all"></button>
            </div>
        </div>

        <!-- Submission Form -->
        <div class="reveal lg:col-span-2 flex flex-col">
            <div class="text-right mb-6">
                <span class="text-olive-600 text-sm font-bold tracking-[0.15em]">شاركنا رأيك</span>
                <h3 class="font-serif text-2xl md:text-3xl font-bold text-warm-900 mt-3">تجربتك تهمنا</h3>
            </div>
            <form id="testi-form" action="{{ route('testimonials.store') }}" method="POST" class="contact-bg-form bg-white border border-sand rounded-2xl p-7 md:p-8 space-y-5 flex-1">
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
                <button type="submit" class="w-full py-4 bg-terracotta text-ivory font-semibold rounded-xl hover:bg-olive-800 transition-all duration-300 flex items-center justify-center gap-2">
                    <i class="fas fa-paper-plane text-sm"></i> أرسل شهادتك
                </button>
            </form>
        </div>
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


<!-- CONTACT -->
@include('includes.contact')

@include('includes.footer')
