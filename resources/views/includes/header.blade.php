<!DOCTYPE html>
<html lang="ar" dir="rtl" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', $setting->site_title ?? 'Brix | printer')</title>

    <meta name="description" content="{{ $setting->meta_description ?? 'Luxury Fine Dining Experience' }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Alexandria:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Icons -->
    @if($setting->icon_180)
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('storage/' . $setting->icon_180) }}">
    @endif

    @if($setting->icon_32)
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('storage/' . $setting->icon_32) }}">
    @endif

    @if($setting->icon_16)
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('storage/' . $setting->icon_16) }}">
    @endif

    @if($setting->manifest)
    <link rel="manifest" href="{{ asset('storage/' . $setting->manifest) }}">
    @endif

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#6F8F7A',
                        secondary: '#7B8580',
                        ivory: '#FFFFFF',
                        cream: '#F3F7F4',
                        sand: '#DCE6DF',
                        warm: {
                            50: '#F8FAF8',
                            100: '#F1F5F2',
                            200: '#E5EBE7',
                            300: '#CFD8D2',
                            400: '#98A39C',
                            500: '#737E77',
                            600: '#5E6962',
                            700: '#47524B',
                            800: '#354039',
                            900: '#29332D'
                        },
                        // primary color
                        terracotta: '#6F8F7A',
                        olive: {
                            50: '#F5F8F6',
                            100: '#E7F0EA',
                            200: '#D5E4DA',
                            400: '#91A997',
                            600: '#6F8F7A',
                            800: '#587061'
                        },
                        brand: {
                            orange: '#89928D',
                            'orange-deep': '#707A74',
                            blue: '#6F8F7A',
                            'blue-deep': '#587061',
                            navy: '#354039'
                        }
                    },
                    fontFamily: {
                        serif: ['Alexandria', 'sans-serif'],
                        sans: ['Alexandria', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <style>
        * {
            font-family: 'Alexandria', sans-serif
        }

        h1,
        h2,
        h3,
        .font-serif {
            font-family: 'Alexandria', sans-serif
        }

        ::selection {
            background: #6F8F7A;
            color: #fff
        }

        ::-webkit-scrollbar {
            width: 6px
        }

        ::-webkit-scrollbar-track {
            background: #F3F7F4
        }

        ::-webkit-scrollbar-thumb {
            background: #6F8F7A;
            border-radius: 3px
        }

        html {
            scroll-behavior: smooth
        }

        .reveal {
            opacity: 1;
            transform: translateY(60px);
            transition: all 1.2s cubic-bezier(.16, 1, .3, 1)
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0)
        }

        .reveal-delay-1 {
            transition-delay: .15s
        }

        .reveal-delay-2 {
            transition-delay: .3s
        }

        .reveal-delay-3 {
            transition-delay: .45s
        }

        .reveal-delay-4 {
            transition-delay: .6s
        }

        .img-reveal {
            overflow: hidden
        }

        .img-reveal img {
            transform: scale(1.15);
            transition: transform 1.8s cubic-bezier(.16, 1, .3, 1)
        }

        .img-reveal.active img {
            transform: scale(1)
        }

        .paper-texture {
            background-image: none
        }

        .mega-panel {
            opacity: 0;
            visibility: hidden;
            transform: translateY(8px);
            transition: all .35s ease
        }

        .mega-trigger:hover .mega-panel {
            opacity: 1;
            visibility: visible;
            transform: translateY(0)
        }

        .accordion-body {
            max-height: 0;
            overflow: hidden;
            transition: max-height .5s cubic-bezier(.16, 1, .3, 1)
        }

        .accordion-item.open .accordion-body {
            max-height: 600px
        }

        .accordion-item.open .accordion-arrow {
            transform: rotate(180deg)
        }

        .accordion-arrow {
            transition: transform .3s ease
        }

        .counter-num {
            font-variant-numeric: tabular-nums
        }

        #navbar {
            z-index: 999 !important;
        }

        .nav-link {
            position: relative;
            color: #111827 !important;
        }

        .nav-link:hover {
            color: #6F8F7A !important;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            right: 0;
            width: 0;
            height: 1.5px;
            background: #6F8F7A;
            transition: width .4s cubic-bezier(.16, 1, .3, 1)
        }

        .nav-link:hover::after {
            width: 100%
        }

        .mobile-link,
        #mobile-panel nav > a,
        #mobile-panel nav button {
            color: #111827 !important;
        }

        .mobile-link:hover,
        #mobile-panel nav > a:hover,
        #mobile-panel nav button:hover {
            color: #6F8F7A !important;
        }

        #hero h1,
        #page-hero #hero-title {
            line-height: 1.45 !important;
        }

        #hero p,
        #page-hero #hero-subtitle {
            line-height: 2 !important;
        }

        .card-lift {
            transition: all .5s cubic-bezier(.16, 1, .3, 1)
        }

        .card-lift:hover {
            transform: translateY(-3px)
        }

        .filter-active {
            background: #DDEADF !important;
            color: #354039 !important;
            border-color: #C5D8CA !important
        }

        a.bg-terracotta,
        button.bg-terracotta {
            background-color: #DDEADF !important;
            color: #354039 !important;
            border: 1px solid #C5D8CA;
        }

        a.bg-terracotta:hover,
        button.bg-terracotta:hover {
            background-color: #CFE0D3 !important;
            color: #29332D !important;
        }

        .toast-msg {
            transform: translateY(100px);
            opacity: 0;
            transition: all .5s cubic-bezier(.16, 1, .3, 1)
        }

        .toast-msg.show {
            transform: translateY(0);
            opacity: 1
        }

        /* Mobile Menu */
        .mobile-overlay {
            position: fixed;
            inset: 0;
            background: rgba(41, 51, 45, 0.28);
            z-index: 1000;
            opacity: 0;
            pointer-events: none;
            transition: opacity .4s ease
        }

        .mobile-overlay.active {
            opacity: 1;
            pointer-events: auto
        }

        .mobile-panel {
            position: fixed;
            top: 0;
            right: 0;
            width: 85%;
            max-width: 360px;
            height: 100%;
            z-index: 1001;
            background: #FFFFFF;
            transform: translateX(100%);
            transition: transform .4s cubic-bezier(.16, 1, .3, 1);
            overflow-y: auto;
            box-shadow: -12px 0 35px rgba(41, 51, 45, 0.10)
        }

        .mobile-panel.active {
            transform: translateX(0)
        }

        @keyframes marquee {
            0% {
                transform: translateX(0)
            }

            100% {
                transform: translateX(-50%)
            }
        }

        .marquee-track {
            animation: marquee 30s linear infinite
        }

        .marquee-track:hover {
            animation-play-state: paused
        }

        .bg-print-halftone {
            background-image: none;
        }

        @keyframes lineGrow {
            from {
                width: 0%;
            }

            to {
                width: 100%;
            }
        }

        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* image bg pages */

        .contact-bg-form {
            background-image: none;
            background-color: #F3F7F4;
            box-shadow: none !important;


        }

        .value-bg,
        .faq-bg,
        .footer-bg {
            background-image: none !important;
        }

        .footer-bg {
            background-color: #E7F0EA !important;
            color: #354039 !important;
        }

        .footer-bg .text-ivory {
            color: #354039 !important;
        }

        .footer-bg .text-warm-400,
        .footer-bg .text-warm-500 {
            color: #66736B !important;
        }

        .footer-bg .border-warm-600,
        .footer-bg .border-warm-700 {
            border-color: #C8D8CD !important;
        }

        .text-yellow-500 {
            color: #6F8F7A !important;
        }

        button,
        a,
        input,
        select,
        textarea {
            transition-duration: 250ms !important;
        }

        .shadow-xl,
        .shadow-2xl {
            box-shadow: 0 16px 45px rgba(53, 64, 57, 0.08) !important;
        }

        #navbar {
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(18px);
            border-bottom: 1px solid rgba(220, 230, 223, 0.85);
        }

        input:focus,
        select:focus,
        textarea:focus {
            box-shadow: 0 0 0 3px rgba(111, 143, 122, 0.10);
        }



    </style>
</head>

<body class="bg-ivory text-warm-800 paper-texture">
    <!-- Toast -->
    <div id="toast" class="toast-msg fixed bottom-8 left-1/2 -translate-x-1/2 z-[200] bg-warm-800 text-ivory px-8 py-4 rounded-full shadow-2xl flex items-center gap-3 text-sm font-semibold">
        <i class="fas fa-check-circle text-olive-400"></i>
        <span id="toast-text">تم الإرسال بنجاح</span>
    </div>

    <!-- Mobile Overlay — separate from panel -->
    <div id="mobile-overlay" class="mobile-overlay" onclick="closeMobile()"></div>

    <!-- Mobile Panel — separate from overlay -->
    <div id="mobile-panel" class="mobile-panel">
        <div class="p-8">
            <div class="flex items-center justify-between mb-12">
                <span class="text-lg font-bold font-serif text-warm-800">القائمة</span>
                <button onclick="closeMobile()" class="w-10 h-10 rounded-full border border-sand flex items-center justify-center hover:bg-cream transition-colors">
                    <i class="fas fa-times text-warm-600"></i>
                </button>
            </div>
            <nav class="space-y-1">
                <a href="{{ route('home') }}" onclick="closeMobile()" class="mobile-link block py-3 text-lg font-serif font-bold text-warm-800 hover:text-terracotta transition-colors">الرئيسية</a>

                <!-- قائمة الخدمات (Accordion) -->
                <div>
                    <button onclick="toggleMobileDropdown('services-dropdown')" class="w-full flex justify-between items-center py-3 text-lg font-serif font-bold text-warm-800 hover:text-terracotta transition-colors">
                        <span>الخدمات</span>
                        <i id="services-icon" class="fas fa-chevron-down text-xs transition-transform duration-300"></i>
                    </button>
                    <div id="services-dropdown" class="hidden pr-4 space-y-2 pb-2">
                        @foreach ($categories as $category)
                        <a href="{{ route('services.show', $category) }}" onclick="closeMobile()" class="flex items-center gap-3 p-2 rounded-xl hover:bg-cream transition-colors group">
                            @if($category->img)
                            <img src="{{ Storage::url($category->img) }}" alt="{{ $category->name }}" class="w-12 h-12 rounded-xl object-cover border border-sand shrink-0">
                            @else
                            <span class="w-12 h-12 rounded-xl bg-olive-100 text-terracotta flex items-center justify-center shrink-0"><i class="fas fa-print text-sm"></i></span>
                            @endif
                            <div class="min-w-0">
                                <span class="text-sm font-bold text-warm-800 group-hover:text-terracotta transition-colors">{{ $category->name }}</span>
                                <span class="block text-[11px] text-warm-400 line-clamp-1">{{ $category->description }}</span>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>

                <a href="{{ route('portfolio') }}" onclick="closeMobile()" class="mobile-link block py-3 text-lg font-serif font-bold text-warm-800 hover:text-terracotta transition-colors">أعمالنا</a>
                <a href="{{ route('articles.index') }}" onclick="closeMobile()" class="mobile-link block py-3 text-lg font-serif font-bold text-warm-800 hover:text-terracotta transition-colors">المقالات</a>

                <!-- قائمة شركاء النجاح (Accordion) -->
                <div>
                    <button onclick="toggleMobileDropdown('brands-dropdown')" class="w-full flex justify-between items-center py-3 text-lg font-serif font-bold text-warm-800 hover:text-terracotta transition-colors">
                        <span>شركاء النجاح</span>
                        <i id="brands-icon" class="fas fa-chevron-down text-xs transition-transform duration-300"></i>
                    </button>
                    <div id="brands-dropdown" class="hidden pr-4 space-y-2 pb-2 max-h-60 overflow-y-auto">
                        @foreach ($allBrands as $brand)
                        <a href="{{ route('brand.show', $brand->slug) }}" onclick="closeMobile()" class="flex items-center gap-3 p-2 rounded-xl hover:bg-cream transition-colors group">

                            @if($brand->image)
                            <!-- ضبطنا حجم الصورة عشان تناسب الموبايل -->
                            <img src="{{ Storage::url($brand->image) }}" alt="{{ $brand->name }}" class="w-10 h-10 rounded-lg object-contain bg-white p-1 border border-sand/50 flex-shrink-0">
                            @else
                            <div class="w-10 h-10 rounded-lg bg-cream flex items-center justify-center border border-sand/50 flex-shrink-0">
                                <i class="fas fa-building text-warm-400 text-sm"></i>
                            </div>
                            @endif

                            <div class="min-w-0">
                                <span class="text-sm font-bold text-warm-800 group-hover:text-terracotta transition-colors">{{ $brand->name }}</span>
                                <span class="block text-[11px] text-warm-400 line-clamp-1">{{ $brand->info }}</span>
                            </div>

                        </a>
                        @endforeach
                    </div>
                </div>

                <a href="{{ route('quote') }}" onclick="closeMobile()" class="mobile-link block py-3 text-lg font-serif font-bold text-warm-800 hover:text-terracotta transition-colors">عرض سعر</a>
                <a href="{{ route('contact') }}" onclick="closeMobile()" class="mobile-link block py-3 text-lg font-serif font-bold text-warm-800 hover:text-terracotta transition-colors">تواصل معنا</a>
            </nav>

            <div class="mt-10 pt-8 border-t border-sand">
                <a href="{{ route('quote') }}" onclick="closeMobile()" class="mobile-link block w-full py-4 bg-terracotta text-ivory text-center font-bold rounded-full hover:bg-warm-800 transition-colors">اطلب عرض سعر</a>
            </div>
        </div>
    </div>


    <!-- Navigation -->
    <nav id="navbar" class="fixed top-0 right-0 left-0 z-50 transition-all duration-500">
        <div class="max-w-[1400px] mx-auto px-6 md:px-12">
            <div class="flex items-center justify-between h-20 md:h-[88px] gap-6">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="logo order-3 flex items-center gap-2 shrink-0">
                    @if($setting->logo)
                    <img src="{{ asset('storage/' . $setting->logo) }}" alt="{{ $setting->site_name }}" class="h-14 md:h-16 w-auto object-contain">
                    @else
                    <i class="fas fa-print text-terracotta"></i>
                    @endif
                </a>

                <!-- Desktop Menu -->
                <div class="order-1 hidden lg:flex items-center gap-6">
                    <a href="{{ route('home') }}" class="nav-link text-sm font-semibold text-warm-700 hover:text-terracotta transition-colors">الرئيسية</a>
                    <div class="mega-trigger relative">
                        <button class="nav-link text-sm font-semibold text-warm-700 hover:text-terracotta transition-colors flex items-center gap-1">الخدمات <i class="fas fa-chevron-down text-[8px]"></i></button>
                        <div class="mega-panel absolute top-full right-0 pt-5 w-[360px]">
                            <div class="bg-white border border-sand rounded-2xl shadow-xl p-2 max-h-[440px] overflow-y-auto">
                                @foreach ($categories as $category)
                                <a href="{{ route('services.show', $category) }}" class="flex items-center gap-3 px-3 py-3 rounded-xl hover:bg-cream transition-colors group">
                                    @if($category->img)
                                    <img src="{{ Storage::url($category->img) }}" alt="{{ $category->name }}" class="w-14 h-14 rounded-xl object-cover border border-sand shrink-0">
                                    @else
                                    <span class="w-14 h-14 rounded-xl bg-olive-100 text-terracotta flex items-center justify-center shrink-0 group-hover:bg-terracotta group-hover:text-white transition-colors"><i class="fas fa-print text-sm"></i></span>
                                    @endif
                                    <div class="min-w-0"><span class="block text-sm font-semibold text-warm-800 group-hover:text-terracotta">{{ $category->name }}</span><span class="block text-xs text-warm-400 mt-1 truncate">{{ $category->description }}</span></div>
                                    <i class="fas fa-arrow-left text-[10px] text-warm-300 mr-auto group-hover:text-terracotta group-hover:-translate-x-1 transition-all"></i>
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('portfolio') }}" class="nav-link text-sm font-semibold text-warm-700 hover:text-terracotta transition-colors">أعمالنا</a>
                    <a href="{{ route('articles.index') }}" class="nav-link text-sm font-semibold text-warm-700 hover:text-terracotta transition-colors">المقالات</a>

                    <div class="mega-trigger relative">
                        <button class="nav-link text-sm font-semibold text-warm-700 hover:text-terracotta transition-colors flex items-center gap-1">شركاء النجاح <i class="fas fa-chevron-down text-[8px]"></i></button>
                        <div class="mega-panel absolute top-full right-0 pt-5 w-[360px]">
                            <div class="bg-white border border-sand rounded-2xl shadow-xl p-2 max-h-[440px] overflow-y-auto">
                                @foreach ($allBrands as $brand)
                                <a href="{{ route('brand.show', $brand->slug) }}" class="flex items-center gap-3 px-3 py-3 rounded-xl hover:bg-cream transition-colors group">

                                    @if($brand->image)
                                    <img src="{{ Storage::url($brand->image) }}" alt="{{ $brand->name }}" class="w-14 h-14 rounded-xl object-cover bg-white border border-sand flex-shrink-0">
                                    @else
                                    <div class="w-14 h-14 rounded-xl bg-olive-100 flex items-center justify-center border border-sand flex-shrink-0">
                                        <i class="fas fa-building text-warm-400 text-sm"></i>
                                    </div>
                                    @endif

                                    <div class="min-w-0">
                                        <span class="text-sm font-bold text-warm-800 group-hover:text-terracotta transition-colors">{{ $brand->name }}</span>
                                        <span class="block text-[11px] text-warm-400 line-clamp-1">{{ $brand->info }}</span>
                                    </div>

                                    <i class="fas fa-arrow-left text-[10px] text-warm-300 mr-auto group-hover:text-terracotta group-hover:-translate-x-1 transition-all"></i>

                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('quote') }}" class="nav-link text-sm font-semibold text-warm-700 hover:text-terracotta transition-colors">عرض سعر</a>
                    <a href="{{ route('contact') }}" class="nav-link text-sm font-semibold text-warm-700 hover:text-terracotta transition-colors">تواصل معنا</a>
                </div>
                <div class="order-2 hidden lg:flex items-center gap-4 mr-auto">
                    <a href="{{ route('quote') }}" class="px-5 py-2.5 bg-terracotta text-ivory text-sm font-semibold rounded-xl hover:bg-olive-800 transition-all duration-300">اطلب عرض سعر</a>
                </div>
                <!-- Mobile Toggle -->
                <button id="menu-toggle-btn" onclick="openMobile()" class="order-1 lg:hidden w-10 h-10 rounded-xl bg-cream flex items-center justify-center text-warm-700">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
    </nav>

    <script>
        function toggleMobileDropdown(id) {
            const dropdown = document.getElementById(id);
            const iconId = id.replace('-dropdown', '-icon');
            const icon = document.getElementById(iconId);

            if (!dropdown.classList.contains('hidden')) {
                dropdown.classList.add('hidden');
                if (icon) icon.style.transform = 'rotate(0deg)';
            } else {
                document.querySelectorAll('#services-dropdown, #brands-dropdown').forEach(el => {
                    el.classList.add('hidden');
                });
                document.querySelectorAll('#services-icon, #brands-icon').forEach(ic => {
                    ic.style.transform = 'rotate(0deg)';
                });

                // ونفتح القائمة اللي اتداست
                dropdown.classList.remove('hidden');
                if (icon) icon.style.transform = 'rotate(180deg)';
            }
        }
    </script>
