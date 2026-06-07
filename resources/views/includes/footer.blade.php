 <!-- FOOTER -->
 <footer class="bg-warm-50 text-warm-200 pt-20 pb-8">
     <div class="max-w-[1400px] mx-auto px-6 md:px-12">
         <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
             <div>
                 <div class="flex items-center gap-3 mb-6">
                     <a href="#" class="footer-logo flex items-center justify-center gap-2">
                         @if($setting->logo)
                         <img src="{{ asset('storage/' . $setting->logo) }}" class="h-20 w-auto">
                         @endif
                         {{ $setting->site_name ?? 'AURUM' }}<span>.</span>
                     </a>
                 </div>
                 <p class="text-sm text-warm-400 leading-[1.9] mb-6">شريكك الإبداعي في عالم الطباعة والإعلان.</p>
                 <div class="flex gap-3">
                     @if($setting->facebook)
                     <a href="{{ $setting->facebook }}" class="w-9 h-9 rounded-full border border-warm-600 flex items-center justify-center text-warm-400 hover:border-terracotta hover:text-terracotta transition-all text-sm" target="_blank" class="social-link"><i class="fab fa-facebook-f"></i></a>
                     @endif
                     @if($setting->instagram)
                     <a href="{{ $setting->instagram }}" class="w-9 h-9 rounded-full border border-warm-600 flex items-center justify-center text-warm-400 hover:border-terracotta hover:text-terracotta transition-all text-sm" target="_blank" class="social-link"><i class="fab fa-instagram"></i></a>
                     @endif
                     @if($setting->twitter)
                     <a href="{{ $setting->twitter }}" class="w-9 h-9 rounded-full border border-warm-600 flex items-center justify-center text-warm-400 hover:border-terracotta hover:text-terracotta transition-all text-sm" target="_blank" class="social-link"><i class="fab fa-twitter"></i></a>
                     @endif
                     @if($setting->snapchat)
                     <a href="{{ $setting->snapchat }}" class="w-9 h-9 rounded-full border border-warm-600 flex items-center justify-center text-warm-400 hover:border-terracotta hover:text-terracotta transition-all text-sm" target="_blank" class="social-link"><i class="fab fa-snapchat-ghost"></i></a>
                     @endif
                     @if($setting->tiktok)
                     <a href="{{ $setting->tiktok }}" class="w-9 h-9 rounded-full border border-warm-600 flex items-center justify-center text-warm-400 hover:border-terracotta hover:text-terracotta transition-all text-sm" target="_blank" class="social-link"><i class="fab fa-tiktok"></i></a>
                     @endif
                 </div>
             </div>
             <div>
                 <h4 class="font-serif text-lg font-bold text-ivory mb-6">روابط سريعة</h4>
                 <ul class="space-y-3">
                     <li><a href="#about" class="text-sm text-warm-400 hover:text-terracotta transition-colors">من نحن</a></li>
                     <li><a href="#services" class="text-sm text-warm-400 hover:text-terracotta transition-colors">الخدمات</a></li>
                     <li><a href="#portfolio" class="text-sm text-warm-400 hover:text-terracotta transition-colors">أعمالنا</a></li>
                     <li><a href="#blog" class="text-sm text-warm-400 hover:text-terracotta transition-colors">المدونة</a></li>
                     <li><a href="#pricing" class="text-sm text-warm-400 hover:text-terracotta transition-colors">الأسعار</a></li>
                 </ul>
             </div>
             <div>
                 <h4 class="font-serif text-lg font-bold text-ivory mb-6">خدماتنا</h4>
                 <ul class="space-y-3">
                     <li><a href="#services" class="text-sm text-warm-400 hover:text-terracotta transition-colors">الطباعة الديجيتال</a></li>
                     <li><a href="#services" class="text-sm text-warm-400 hover:text-terracotta transition-colors">الهوية البصرية</a></li>
                     <li><a href="#services" class="text-sm text-warm-400 hover:text-terracotta transition-colors">اللوحات الإعلانية</a></li>
                     <li><a href="#services" class="text-sm text-warm-400 hover:text-terracotta transition-colors">التغليف والعبوات</a></li>
                     <li><a href="#services" class="text-sm text-warm-400 hover:text-terracotta transition-colors">الحملات التسويقية</a></li>
                 </ul>
             </div>
             <div>
                 <h4 class="font-serif text-lg font-bold text-ivory mb-6">تواصل معنا</h4>
                 <ul class="space-y-3">
                     <li class="flex items-center gap-2 text-sm text-warm-400"><i class="fas fa-phone text-xs text-terracotta"></i>{{ $setting->mobile }}</li>
                     <li class="flex items-center gap-2 text-sm text-warm-400"><i class="fas fa-envelope text-xs text-terracotta"></i>{{ $setting->email }}</li>
                     <li class="flex items-center gap-2 text-sm text-warm-400"><i class="fas fa-location-dot text-xs text-terracotta"></i>{{ $setting->address_ar }}</li>
                 </ul>
             </div>
         </div>
         <div class="border-t border-warm-700 pt-8 flex flex-wrap items-center justify-between gap-4">
             <p class="text-xs text-warm-500">© 2026 Avora-Tech جميع الحقوق محفوظة.</p>
         </div>
     </div>
 </footer>


 <!-- Floating WhatsApp -->
 <a href="https://wa.me/2{{ $setting->whatsapp }}" target="_blank" class="fixed bottom-6 left-6 z-40 w-14 h-14 bg-olive-600 rounded-full flex items-center justify-center text-ivory text-xl shadow-lg hover:bg-olive-800 transition-all hover:scale-110" style="box-shadow:0 4px 20px rgba(92,107,66,0.4)">
     <i class="fab fa-whatsapp"></i>
 </a>

 <!-- Back to Top -->
 <button id="back-top" onclick="window.scrollTo({top:0,behavior:'smooth'})" class="fixed bottom-6 right-6 z-40 w-12 h-12 bg-terracotta text-ivory rounded-full flex items-center justify-center shadow-lg transition-all duration-300 hover:bg-warm-800" style="opacity:0;pointer-events:none">
     <i class="fas fa-arrow-up text-sm"></i>
 </button>


 <script>
     // ===== Mobile Menu — FIXED =====
     const mobileOverlay = document.getElementById('mobile-overlay');
     const mobilePanel = document.getElementById('mobile-panel');

     function openMobile() {
         mobileOverlay.classList.add('active');
         mobilePanel.classList.add('active');
         document.body.style.overflow = 'hidden';
     }

     function closeMobile() {
         mobileOverlay.classList.remove('active');
         mobilePanel.classList.remove('active');
         document.body.style.overflow = '';
     }

     // Close on overlay click
     mobileOverlay.addEventListener('click', closeMobile);

     // Close on Escape key
     document.addEventListener('keydown', function(e) {
         if (e.key === 'Escape') closeMobile();
     });

     // ===== Navbar Scroll =====
     const navbar = document.getElementById('navbar');
     window.addEventListener('scroll', function() {
         const y = window.scrollY;
         if (y > 80) {
             navbar.style.background = 'rgba(250,247,242,0.95)';
             navbar.style.backdropFilter = 'blur(16px)';
             navbar.style.boxShadow = '0 1px 0 rgba(0,0,0,0.05)';
         } else {
             navbar.style.background = 'transparent';
             navbar.style.backdropFilter = 'none';
             navbar.style.boxShadow = 'none';
         }
         // Back to top
         const btn = document.getElementById('back-top');
         if (y > 500) {
             btn.style.opacity = '1';
             btn.style.pointerEvents = 'auto';
         } else {
             btn.style.opacity = '0';
             btn.style.pointerEvents = 'none';
         }
     });

     // ===== Smooth Scroll — FIXED =====
     document.querySelectorAll('a[href^="#"]').forEach(function(a) {
         a.addEventListener('click', function(e) {
             var href = a.getAttribute('href');
             if (href && href !== '#' && href.length > 1) {
                 var target = document.querySelector(href);
                 if (target) {
                     e.preventDefault();
                     // Close mobile menu if open
                     closeMobile();
                     // Smooth scroll
                     setTimeout(function() {
                         target.scrollIntoView({
                             behavior: 'smooth',
                             block: 'start'
                         });
                     }, 100);
                 }
             }
         });
     });

     // ===== Reveal on Scroll =====
     function initReveal() {
         var els = document.querySelectorAll('.reveal,.img-reveal');
         var observer = new IntersectionObserver(function(entries) {
             entries.forEach(function(entry) {
                 if (entry.isIntersecting) {
                     entry.target.classList.add('active');
                 }
             });
         }, {
             threshold: 0.1,
             rootMargin: '0px 0px -60px 0px'
         });
         els.forEach(function(el) {
             observer.observe(el);
         });
     }
     initReveal();

     // ===== Counters =====
     function initCounters() {
         var counters = document.querySelectorAll('.counter-num');
         var observer = new IntersectionObserver(function(entries) {
             entries.forEach(function(entry) {
                 if (entry.isIntersecting && !entry.target.dataset.counted) {
                     entry.target.dataset.counted = 'true';
                     var target = parseInt(entry.target.dataset.target);
                     var current = 0;
                     var step = Math.ceil(target / 60);
                     var timer = setInterval(function() {
                         current += step;
                         if (current >= target) {
                             current = target;
                             clearInterval(timer);
                         }
                         entry.target.textContent = current.toLocaleString('ar-EG');
                     }, 30);
                 }
             });
         }, {
             threshold: 0.5
         });
         counters.forEach(function(c) {
             observer.observe(c);
         });
     }
     initCounters();

     // ===== Accordion =====
     function toggleAccordion(btn) {
         var item = btn.closest('.accordion-item');
         var wasOpen = item.classList.contains('open');
         document.querySelectorAll('.accordion-item').forEach(function(i) {
             i.classList.remove('open');
         });
         if (!wasOpen) item.classList.add('open');
     }

     // ===== Portfolio Filter =====
     function filterPortfolio(cat) {
         // Update buttons
         document.querySelectorAll('#portfolio-filters .filter-btn').forEach(function(b) {
             b.classList.remove('filter-active');
         });
         event.target.classList.add('filter-active');
         // Filter items
         document.querySelectorAll('.portfolio-item').forEach(function(item) {
             if (cat === 'all' || item.dataset.cat === cat) {
                 item.style.display = '';
                 item.style.opacity = '0';
                 setTimeout(function() {
                     item.style.opacity = '1';
                     item.style.transition = 'opacity 0.5s ease';
                 }, 50);
             } else {
                 item.style.opacity = '0';
                 setTimeout(function() {
                     item.style.display = 'none';
                 }, 300);
             }
         });
     }

     // ===== Form Submit =====
     function submitForm(e) {
         e.preventDefault();
         var toast = document.getElementById('toast');
         var text = document.getElementById('toast-text');
         fetch('/contact', {
             method: 'POST',
             body: new FormData(e.target),
             headers: {
                 'X-Requested-With': 'XMLHttpRequest'
             }
         })
         text.textContent = 'تم الإرسال بنجاح! سنتواصل معك قريباً';
         toast.classList.add('show');
         e.target.reset();
         setTimeout(function() {
             toast.classList.remove('show');
         }, 4000);
     }

     // ===== Testimonials Slider =====
     let testiCurrent = 0;
     const testiTotal = 5;

     function slideTesti(dir) {
         testiCurrent += dir;
         if (testiCurrent < 0) testiCurrent = testiTotal - 1;
         if (testiCurrent >= testiTotal) testiCurrent = 0;
         updateTestiSlider();
     }

     function goToSlide(i) {
         testiCurrent = i;
         updateTestiSlider();
     }

     function updateTestiSlider() {
         const track = document.getElementById('testi-track');
         if (track) {
             track.style.transform = 'translateX(' + (testiCurrent * 100) + '%)';
         }
         const dots = document.querySelectorAll('.testi-dot');
         dots.forEach(function(dot, i) {
             if (i === testiCurrent) {
                 dot.classList.remove('bg-sand');
                 dot.classList.add('bg-terracotta');
                 dot.style.width = '24px';
             } else {
                 dot.classList.remove('bg-terracotta');
                 dot.classList.add('bg-sand');
                 dot.style.width = '12px';
             }
         });
     }

     // Auto-play
     let testiAutoplay = setInterval(function() {
         slideTesti(1);
     }, 5000);

     // Pause on hover
     const testiSlider = document.getElementById('testi-slider');
     if (testiSlider) {
         testiSlider.addEventListener('mouseenter', function() {
             clearInterval(testiAutoplay);
         });
         testiSlider.addEventListener('mouseleave', function() {
             testiAutoplay = setInterval(function() {
                 slideTesti(1);
             }, 5000);
         });
     }

     // Touch swipe support
     let testiTouchStartX = 0;
     let testiTouchEndX = 0;
     if (testiSlider) {
         testiSlider.addEventListener('touchstart', function(e) {
             testiTouchStartX = e.changedTouches[0].screenX;
             clearInterval(testiAutoplay);
         }, {
             passive: true
         });
         testiSlider.addEventListener('touchend', function(e) {
             testiTouchEndX = e.changedTouches[0].screenX;
             const diff = testiTouchStartX - testiTouchEndX;
             if (Math.abs(diff) > 50) {
                 if (diff > 0) slideTesti(1);
                 else slideTesti(-1);
             }
             testiAutoplay = setInterval(function() {
                 slideTesti(1);
             }, 5000);
         }, {
             passive: true
         });
     }

     // Initialize active dot
     updateTestiSlider();

     // ===== Submit Testimonial via AJAX =====
     document.getElementById('testi-form').addEventListener('submit', function(e) {
         e.preventDefault();

         const form = this;
         const btn = form.querySelector('button[type="submit"]');
         const btnHTML = btn.innerHTML;
         const toast = document.getElementById('toast');
         const toastText = document.getElementById('toast-text');

         // Loading state
         btn.disabled = true;
         btn.innerHTML = '<i class="fas fa-spinner fa-spin text-sm"></i> جاري الإرسال...';

         // Collect form data
         const formData = new FormData(form);
         const name = formData.get('name');
         const jobTitle = formData.get('job_title');
         const company = formData.get('company');
         const message = formData.get('message');

         // Send to Laravel backend
         fetch(form.action, {
                 method: 'POST',
                 body: formData,
                 headers: {
                     'X-Requested-With': 'XMLHttpRequest',
                     'Accept': 'application/json'
                 }
             })
             .then(response => response.json())
             .then(data => {
                 // Reset form
                 form.reset();

                 // Create new slide dynamically
                 const initial = name.charAt(0);
                 const companyText = company ? ' — ' + company : '';

                 const track = document.getElementById('testi-track');
                 const newSlide = document.createElement('div');
                 newSlide.className = 'w-full flex-shrink-0 px-2';
                 newSlide.innerHTML = `
            <div class="bg-ivory/70 backdrop-blur-md border border-terracotta/30 rounded-2xl p-8 md:p-14 md:flex md:items-start md:gap-12 relative">
                <div class="absolute top-4 left-4">
                    <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full bg-olive-100 text-olive-600 text-xs font-bold">
                        <i class="fas fa-check-circle"></i> جديد
                    </span>
                </div>
                <div class="md:flex-shrink-0 mb-6 md:mb-0 text-center md:text-right">
                    <div class="w-20 h-20 md:w-24 md:h-24 rounded-full bg-terracotta/10 flex items-center justify-center text-terracotta font-serif text-3xl md:text-4xl font-bold mx-auto md:mx-0">${initial}</div>
                    <div class="mt-4 hidden md:block">
                        <span class="font-bold text-warm-900 block">${name}</span>
                        <span class="text-xs text-warm-400">${jobTitle}</span>
                        ${company ? '<span class="block text-xs text-terracotta font-semibold">' + company + '</span>' : ''}
                    </div>
                </div>
                <div class="flex-1">
                    <div class="text-terracotta/50 text-6xl md:text-7xl font-serif leading-none mb-2">"</div>
                    <p class="text-warm-700 text-lg md:text-xl leading-[1.9] mb-6">${message}</p>
                    <div class="flex items-center gap-1 mb-4">
                        <i class="fas fa-star text-yellow-500 text-sm"></i>
                        <i class="fas fa-star text-yellow-500 text-sm"></i>
                        <i class="fas fa-star text-yellow-500 text-sm"></i>
                        <i class="fas fa-star text-yellow-500 text-sm"></i>
                        <i class="fas fa-star text-yellow-500 text-sm"></i>
                    </div>
                    <div class="md:hidden">
                        <span class="font-bold text-warm-900 block">${name}</span>
                        <span class="text-xs text-warm-400">${jobTitle}${companyText}</span>
                    </div>
                </div>
            </div>
        `;

                 track.appendChild(newSlide);

                 // Update slider
                 const newTotal = track.children.length;
                 const dotsContainer = document.getElementById('testi-dots');
                 const newDot = document.createElement('button');
                 newDot.className = 'testi-dot w-3 h-3 rounded-full bg-sand transition-all';
                 newDot.setAttribute('onclick', 'goToSlide(' + (newTotal - 1) + ')');
                 dotsContainer.appendChild(newDot);

                 // Go to new slide
                 testiCurrent = newTotal - 1;
                 updateTestiSlider();

                 // Show success toast
                 toastText.textContent = 'شكراً ' + name + '! تم إرسال شهادتك بنجاح ✨';
                 toast.classList.add('show');
                 setTimeout(function() {
                     toast.classList.remove('show');
                 }, 4000);
             })
             .catch(error => {
                 // Show error toast
                 toastText.textContent = 'حدث خطأ، حاول مرة أخرى';
                 toast.classList.add('show');
                 setTimeout(function() {
                     toast.classList.remove('show');
                 }, 4000);
             })
             .finally(() => {
                 // Restore button
                 btn.disabled = false;
                 btn.innerHTML = btnHTML;
             });
     });
 </script>

 </body>

 </html>
