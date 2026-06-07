@include('includes.header')
<!-- ===== DYNAMIC HERO LAYOUT ===== -->
<section id="page-hero" class="relative min-h-[85vh] md:min-h-screen flex items-center justify-center overflow-hidden bg-cover bg-center bg-no-repeat">

    <!-- Dynamic Background Image -->
    <div id="hero-bg" class="absolute inset-0 bg-cover bg-center bg-no-repeat transition-all duration-1000" style="background-image: url('https://picsum.photos/seed/hero-home-brix/1600/1000.jpg')"></div>


    <!-- White Fade For Navbar -->
    <div class="absolute top-0 left-0 right-0 h-60 bg-gradient-to-b from-white/90 via-white/30 to-transparent z-[1]"></div>

    <!-- Gradient Overlay -->
    <div class="absolute inset-0 bg-gradient-to-bl from-[#1946AF]/90 via-[#0F172A]/85 to-[#0F172A]/90"></div>

    <!-- Decorative Elements -->
    <div class="absolute top-20 right-20 w-72 h-72 bg-[#FA6B31]/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-40 left-10 w-96 h-96 bg-[#1946AF]/15 rounded-full blur-3xl"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-[#FA6B31]/5 rounded-full blur-3xl"></div>

    <!-- Halftone Texture -->
    <div class="absolute inset-0 bg-print-halftone opacity-20"></div>

    <!-- Content -->
    <div class="relative z-10 text-center px-6 max-w-4xl mx-auto pt-28 pb-32">
        <div id="hero-content" class="hero-content-wrap">
            <!-- Brand Label -->
            <span id="hero-label" class="inline-flex items-center gap-2 px-5 py-2 rounded-full bg-white/[0.07] backdrop-blur-sm border border-white/[0.08] text-[#FA6B31] text-sm font-bold tracking-[0.15em] mb-8">
                BRIX PRINT ALL SOLUTIONS
            </span>

            <!-- Dynamic Title -->
            <h1 id="hero-title" class="font-serif text-4xl sm:text-5xl md:text-7xl font-bold text-ivory leading-tight mb-6">
                @yield('title')
            </h1>

            <!-- Dynamic Subtitle -->
            <p id="hero-subtitle" class="text-warm-300 text-lg md:text-xl leading-relaxed mb-10 max-w-2xl mx-auto">
                شريكك المتكامل في عالم الطباعة الديجيتال والتصميم والإعلانات المبتكرة
            </p>

            <!-- CTA Buttons -->
            <div id="hero-ctas" class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="#quote" class="flex items-center gap-2 bg-[#FA6B31] text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-[#E85A20] transition-all duration-300 shadow-xl shadow-[#FA6B31]/20 hover:shadow-[#FA6B31]/40 hover:scale-105">
                    <i class="fas fa-file-invoice"></i>
                    اطلب عرض سعر
                </a>
                <a href="#services" class="flex items-center gap-2 bg-white/10 backdrop-blur-sm border border-white/20 text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-white/20 transition-all duration-300 hover:scale-105">
                    تعرف على خدماتنا
                    <i class="fas fa-arrow-left"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Wave SVG at the Bottom -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg viewBox="0 0 1440 320" xmlns="http://www.w3.org/2000/svg" class="w-full h-auto page-hero-wave">
            <path fill="#FAF7F2" d="M0,224L48,213.3C96,203,192,181,288,181.3C384,181,480,203,576,218.7C672,235,768,245,864,234.7C960,224,1056,192,1152,186.7C1248,181,1344,203,1392,213.3L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>
</section>

<!-- ===== MAIN CONTENT ===== -->
<main class="relative z-10 bg-ivory">
    @yield('content')
</main>
@include('includes.footer')
