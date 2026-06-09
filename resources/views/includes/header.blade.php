<!DOCTYPE html>
<html lang="ar" dir="rtl" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $setting->site_title ?? 'Aurum | Fine Dining' }}</title>

    <meta name="description" content="{{ $setting->meta_description ?? 'Luxury Fine Dining Experience' }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400&family=Cairo:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
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
                        primary: '#FA6B31',
                        secondary: '#1946AF',
                        ivory: '#FAF7F2',
                        cream: '#F5F0E8',
                        sand: '#E8E0D4',
                        warm: {
                            50: '#FDF9F4',
                            100: '#FAF3E8',
                            200: '#F0E4D0',
                            300: '#D4C4A8',
                            400: '#B8A080',
                            500: '#8C7A60',
                            600: '#6B5D4A',
                            700: '#4A3F32',
                            // blue
                            800: '#42ADDC',
                            // black done change to blue
                            900: '#42ADDC'
                        },
                        // primary color
                        terracotta: '#F54926',
                        olive: {
                            50: '#F4F6EF',
                            100: '#E8ECD9',
                            200: '#D1D9B3',
                            400: '#8B9A6B',
                            600: '#5C6B42',
                            800: '#3A4528'
                        },
                        brand: {
                            orange: '#FA6B31',
                            'orange-deep': '#E85A20',
                            blue: '#1946AF',
                            'blue-deep': '#0F2E79',
                            navy: '#0F172A'
                        }
                    },
                    fontFamily: {
                        serif: ['Amiri', 'serif'],
                        sans: ['Cairo', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <style>
        * {
            font-family: 'Cairo', sans-serif
        }

        h1,
        h2,
        h3,
        .font-serif {
            font-family: 'Amiri', serif
        }

        ::selection {
            background: #FA6B31;
            color: #fff
        }

        ::-webkit-scrollbar {
            width: 6px
        }

        ::-webkit-scrollbar-track {
            background: #FAF7F2
        }

        ::-webkit-scrollbar-thumb {
            background: #C4572A;
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
            background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100' height='100' filter='url(%23n)' opacity='0.03'/%3E%3C/svg%3E")
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
            position: relative
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            right: 0;
            width: 0;
            height: 1.5px;
            background: #C4572A;
            transition: width .4s cubic-bezier(.16, 1, .3, 1)
        }

        .nav-link:hover::after {
            width: 100%
        }

        .card-lift {
            transition: all .5s cubic-bezier(.16, 1, .3, 1)
        }

        .card-lift:hover {
            transform: translateY(-6px)
        }

        .filter-active {
            background: #C4572A !important;
            color: #fff !important
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
            background: rgba(26, 22, 18, 0.5);
            z-index: 61;
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
            z-index: 62;
            background: #FAF7F2;
            transform: translateX(100%);
            transition: transform .4s cubic-bezier(.16, 1, .3, 1);
            overflow-y: auto;
            box-shadow: -10px 0 40px rgba(0, 0, 0, 0.15)
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
            background-image:
                radial-gradient(rgba(25, 70, 175, 0.1) 1px, transparent 1px),
                radial-gradient(rgba(250, 107, 49, 0.08) 1px, transparent 1px);
            background-size: 20px 20px, 30px 30px;
            background-position: 0 0, 15px 15px;
        }

        @keyframes lineGrow {
            from {
                width: 0%;
            }

            to {
                width: 100%;
            }
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
                    <a href="#hero" onclick="closeMobile()" class="mobile-link block py-3 text-lg font-serif font-bold text-warm-800 hover:text-terracotta transition-colors">الرئيسية</a>
                    <a href="#about" onclick="closeMobile()" class="mobile-link block py-3 text-lg font-serif font-bold text-warm-800 hover:text-terracotta transition-colors">من نحن</a>
                    <a href="#services" onclick="closeMobile()" class="mobile-link block py-3 text-lg font-serif font-bold text-warm-800 hover:text-terracotta transition-colors">الخدمات</a>
                    <a href="#portfolio" onclick="closeMobile()" class="mobile-link block py-3 text-lg font-serif font-bold text-warm-800 hover:text-terracotta transition-colors">أعمالنا</a>
                    <a href="#blog" onclick="closeMobile()" class="mobile-link block py-3 text-lg font-serif font-bold text-warm-800 hover:text-terracotta transition-colors">المدونة</a>
                    <a href="#pricing" onclick="closeMobile()" class="mobile-link block py-3 text-lg font-serif font-bold text-warm-800 hover:text-terracotta transition-colors">الأسعار</a>
                    <a href="#faq" onclick="closeMobile()" class="mobile-link block py-3 text-lg font-serif font-bold text-warm-800 hover:text-terracotta transition-colors">الأسئلة الشائعة</a>
                    <a href="#careers" onclick="closeMobile()" class="mobile-link block py-3 text-lg font-serif font-bold text-warm-800 hover:text-terracotta transition-colors">التوظيف</a>
                    <a href="#contact" onclick="closeMobile()" class="mobile-link block py-3 text-lg font-serif font-bold text-warm-800 hover:text-terracotta transition-colors">تواصل معنا</a>
                </nav>
                <div class="mt-10 pt-8 border-t border-sand">
                    <a href="#quote" onclick="closeMobile()" class="mobile-link block w-full py-4 bg-terracotta text-ivory text-center font-bold rounded-full hover:bg-warm-800 transition-colors">اطلب عرض سعر</a>
                </div>
            </div>
        </div>


        <!-- Navigation -->
        <nav id="navbar" class="fixed top-0 right-0 left-0 z-50 transition-all duration-500">
            <div class="max-w-[1400px] mx-auto px-6 md:px-12">
                <div class="flex items-center justify-between h-20 md:h-24">
                    <!-- Logo -->
                    <a href="#" class="logo flex items-center gap-2">
                        @if($setting->logo)
                        <img src="{{ asset('storage/' . $setting->logo) }}" alt="{{ $setting->site_name }}" class="h-20 w-auto">
                        @else
                        <i class="fas fa-utensils text-[#E60914]"></i>
                        @endif
                    </a>

                    <!-- Desktop Menu -->
                    <div class="hidden lg:flex items-center gap-8">
                        <a href="{{ route('home') }}" class="nav-link text-sm font-semibold text-warm-700 hover:text-terracotta transition-colors">الرئيسية</a>
                        <a href="{{ route('about') }}" class="nav-link text-sm font-semibold text-warm-700 hover:text-terracotta transition-colors">من نحن</a>
                        <div class="mega-trigger relative">
                            <button class="nav-link text-sm font-semibold text-warm-700 hover:text-terracotta transition-colors flex items-center gap-1">الخدمات <i class="fas fa-chevron-down text-[8px]"></i></button>
                            <div class="mega-panel absolute top-full right-0 pt-4" style="width:640px">
                                <div class="bg-ivory border border-sand rounded-2xl shadow-xl p-6 grid grid-cols-2 gap-2">
                                    <a href="#services" class="flex items-center gap-3 p-3 rounded-xl hover:bg-cream transition-colors group">
                                        <div class="w-9 h-9 rounded-lg bg-terracotta/10 text-terracotta flex items-center justify-center group-hover:bg-terracotta group-hover:text-white transition-all text-sm"><i class="fas fa-print"></i></div>
                                        <div><span class="text-sm font-bold">الطباعة الديجيتال</span><span class="block text-[11px] text-warm-400">طباعة عالية الجودة</span></div>
                                    </a>
                                    <a href="#services" class="flex items-center gap-3 p-3 rounded-xl hover:bg-cream transition-colors group">
                                        <div class="w-9 h-9 rounded-lg bg-brand-blue/10 text-brand-blue flex items-center justify-center group-hover:bg-brand-blue group-hover:text-white transition-all text-sm"><i class="fas fa-palette"></i></div>
                                        <div><span class="text-sm font-bold">الهوية البصرية</span><span class="block text-[11px] text-warm-400">تصميم هويات مميزة</span></div>
                                    </a>
                                    <a href="#services" class="flex items-center gap-3 p-3 rounded-xl hover:bg-cream transition-colors group">
                                        <div class="w-9 h-9 rounded-lg bg-olive-100 text-olive-600 flex items-center justify-center group-hover:bg-olive-600 group-hover:text-white transition-all text-sm"><i class="fas fa-hashtag"></i></div>
                                        <div><span class="text-sm font-bold">السوشيال ميديا</span><span class="block text-[11px] text-warm-400">محتوى إبداعي</span></div>
                                    </a>
                                    <a href="#services" class="flex items-center gap-3 p-3 rounded-xl hover:bg-cream transition-colors group">
                                        <div class="w-9 h-9 rounded-lg bg-terracotta/10 text-terracotta flex items-center justify-center group-hover:bg-terracotta group-hover:text-white transition-all text-sm"><i class="fas fa-sign-hanging"></i></div>
                                        <div><span class="text-sm font-bold">اللوحات الإعلانية</span><span class="block text-[11px] text-warm-400">لوحات وإيفنتات</span></div>
                                    </a>
                                    <a href="#services" class="flex items-center gap-3 p-3 rounded-xl hover:bg-cream transition-colors group">
                                        <div class="w-9 h-9 rounded-lg bg-brand-blue/10 text-brand-blue flex items-center justify-center group-hover:bg-brand-blue group-hover:text-white transition-all text-sm"><i class="fas fa-gift"></i></div>
                                        <div><span class="text-sm font-bold">الهدايا الدعائية</span><span class="block text-[11px] text-warm-400">هدايا إبداعية</span></div>
                                    </a>
                                    <a href="#services" class="flex items-center gap-3 p-3 rounded-xl hover:bg-cream transition-colors group">
                                        <div class="w-9 h-9 rounded-lg bg-olive-100 text-olive-600 flex items-center justify-center group-hover:bg-olive-600 group-hover:text-white transition-all text-sm"><i class="fas fa-box-open"></i></div>
                                        <div><span class="text-sm font-bold">التغليف والعبوات</span><span class="block text-[11px] text-warm-400">تصميم تغليف احترافي</span></div>
                                    </a>
                                    <a href="#services" class="flex items-center gap-3 p-3 rounded-xl hover:bg-cream transition-colors group">
                                        <div class="w-9 h-9 rounded-lg bg-terracotta/10 text-terracotta flex items-center justify-center group-hover:bg-terracotta group-hover:text-white transition-all text-sm"><i class="fas fa-expand"></i></div>
                                        <div><span class="text-sm font-bold">الطباعة الكبيرة</span><span class="block text-[11px] text-warm-400">مقاسات واسعة</span></div>
                                    </a>
                                    <a href="#services" class="flex items-center gap-3 p-3 rounded-xl hover:bg-cream transition-colors group">
                                        <div class="w-9 h-9 rounded-lg bg-brand-blue/10 text-brand-blue flex items-center justify-center group-hover:bg-brand-blue group-hover:text-white transition-all text-sm"><i class="fas fa-bullhorn"></i></div>
                                        <div><span class="text-sm font-bold">الحملات التسويقية</span><span class="block text-[11px] text-warm-400">حملات متكاملة</span></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('portfolio') }}" class="nav-link text-sm font-semibold text-warm-700 hover:text-terracotta transition-colors">أعمالنا</a>
                        <a href="#blog" class="nav-link text-sm font-semibold text-warm-700 hover:text-terracotta transition-colors">المدونة</a>
                        <a href="{{ route('careers') }}" class="nav-link text-sm font-semibold text-warm-700 hover:text-terracotta transition-colors">الوظايف</a>
                        <a href="#contact" class="nav-link text-sm font-semibold text-warm-700 hover:text-terracotta transition-colors">تواصل معنا</a>
                    </div>
                    <div class="hidden lg:flex items-center gap-4">
                        <a href="#quote" class="px-6 py-2.5 bg-terracotta text-ivory text-sm font-bold rounded-full hover:bg-warm-800 transition-all duration-300">اطلب عرض سعر</a>
                    </div>
                    <!-- Mobile Toggle -->
                    <button id="menu-toggle-btn" onclick="openMobile()" class="lg:hidden w-10 h-10 flex items-center justify-center text-warm-700">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </nav>
