<section id="quote" class="pricing-bg pricing-bg-right py-24 md:py-32 bg-primary/70 relative overflow-hidden">
    <div class="max-w-3xl mx-auto px-6 md:px-12 relative z-10">
        <div class="text-center mb-12">
            <span class="reveal text-terracotta text-sm font-bold tracking-[0.15em]">عرض سعر</span>
            <h2 class="reveal reveal-delay-1 font-serif text-3xl md:text-4xl font-bold text-warm-900 mt-4">أخبرنا عن <span class="text-terracotta">مشروعك</span></h2>
            <p class="reveal reveal-delay-2 text-warm-500 mt-3">املأ النموذج وسنقدم لك عرض سعر مخصص خلال ٢٤ ساعة</p>
        </div>
        <div id="toast"
            class="fixed top-5 left-5 bg-green-600 text-white px-6 py-4 rounded-lg shadow-lg z-50 hidden">
            <span id="toast-text"></span>
        </div>

        <form id="reservation-form" action="{{ route('reservations.store') }}" method="POST" class="contact-bg-form reveal bg-ivory/80 backdrop-blur-sm border border-sand rounded-2xl p-8 md:p-10 space-y-5 shadow-2xl">
            @csrf
            <div class="grid sm:grid-cols-2 gap-5">
                <div><label class="block text-sm font-bold text-warm-700 mb-2">الاسم *</label><input name="name" type="text" required class="w-full px-4 py-3 rounded-xl border border-sand bg-cream/70 text-sm focus:border-terracotta outline-none transition-all"></div>
                <div><label class="block text-sm font-bold text-warm-700 mb-2">الشركة</label><input name="brand" type="text" class="w-full px-4 py-3 rounded-xl border border-sand bg-cream/70 text-sm focus:border-terracotta outline-none transition-all"></div>
            </div>
            <div class="grid sm:grid-cols-2 gap-5">
                <div><label class="block text-sm font-bold text-warm-700 mb-2">الهاتف *</label><input name="phone" type="tel" required class="w-full px-4 py-3 rounded-xl border border-sand bg-cream/70 text-sm focus:border-terracotta outline-none transition-all"></div>
                <div><label class="block text-sm font-bold text-warm-700 mb-2">البريد الإلكتروني *</label><input name="email" type="email" required class="w-full px-4 py-3 rounded-xl border border-sand bg-cream/70 text-sm focus:border-terracotta outline-none transition-all"></div>
            </div>
            <div><label class="block text-sm font-bold text-warm-700 mb-2">نوع الخدمة *</label>
                <select name="category" required class="w-full px-4 py-3 rounded-xl border border-sand bg-cream/70 text-sm focus:border-terracotta outline-none transition-all">
                    <option value="">اختر نوع الخدمة</option>
                    @foreach ($categories as $category)
                    <option>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="w-full py-4 bg-terracotta text-ivory font-bold rounded-full hover:bg-warm-800 transition-all duration-300 flex items-center justify-center gap-2"><i class="fas fa-paper-plane text-sm"></i> إرسال طلب عرض السعر</button>
        </form>
    </div>
</section>
