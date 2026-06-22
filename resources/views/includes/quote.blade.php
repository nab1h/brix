<section id="quote" class="pricing-bg pricing-bg-right py-20 md:py-28 bg-olive-100 relative overflow-hidden">
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

        <form id="reservation-form" action="{{ route('reservations.store') }}" method="POST" enctype="multipart/form-data" class="contact-bg-form reveal bg-white border border-sand rounded-2xl p-7 md:p-9 space-y-5">
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

            <div class="pt-3">
                <h3 class="text-lg font-semibold text-warm-900">مواصفات المنتج</h3>
                <p class="text-sm text-warm-500 mt-1">أدخل المقاسات المطلوبة بالسنتيمتر.</p>
            </div>

            <div class="grid sm:grid-cols-3 gap-5">
                <div>
                    <label class="block text-sm font-bold text-warm-700 mb-2">الطول (سم) *</label>
                    <input name="product_length" type="number" min="0.1" step="0.1" required class="w-full px-4 py-3 rounded-xl border border-sand bg-cream/70 text-sm focus:border-terracotta outline-none transition-all" placeholder="مثال: 20">
                </div>
                <div>
                    <label class="block text-sm font-bold text-warm-700 mb-2">العرض (سم) *</label>
                    <input name="product_width" type="number" min="0.1" step="0.1" required class="w-full px-4 py-3 rounded-xl border border-sand bg-cream/70 text-sm focus:border-terracotta outline-none transition-all" placeholder="مثال: 15">
                </div>
                <div>
                    <label class="block text-sm font-bold text-warm-700 mb-2">الارتفاع (سم) *</label>
                    <input name="product_height" type="number" min="0.1" step="0.1" required class="w-full px-4 py-3 rounded-xl border border-sand bg-cream/70 text-sm focus:border-terracotta outline-none transition-all" placeholder="مثال: 8">
                </div>
            </div>

            <div class="grid sm:grid-cols-2 gap-5">
                <div>
                    <label class="block text-sm font-bold text-warm-700 mb-2">وزن الورق *</label>
                    <select name="paper_weight" required class="w-full px-4 py-3 rounded-xl border border-sand bg-cream/70 text-sm focus:border-terracotta outline-none transition-all">
                        <option value="">اختر الوزن</option>
                        <option value="300">300 جرام</option>
                        <option value="320">320 جرام</option>
                        <option value="350">350 جرام</option>
                        <option value="400">400 جرام</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-bold text-warm-700 mb-2">الخامة *</label>
                    <select name="material" required class="w-full px-4 py-3 rounded-xl border border-sand bg-cream/70 text-sm focus:border-terracotta outline-none transition-all">
                        <option value="">اختر الخامة</option>
                        <option value="بريستول">بريستول</option>
                        <option value="كوشيه">كوشيه</option>
                        <option value="فنلندي الشجرة">فنلندي الشجرة</option>
                    </select>
                </div>
            </div>

            <div class="grid sm:grid-cols-2 gap-5">
                <div>
                    <label class="block text-sm font-bold text-warm-700 mb-2">الكمية المطلوبة *</label>
                    <input name="quantity" type="number" min="1000" step="1" value="1000" required class="w-full px-4 py-3 rounded-xl border border-sand bg-cream/70 text-sm focus:border-terracotta outline-none transition-all">
                    <p class="text-xs text-warm-400 mt-2">الحد الأدنى للطلب 1000 قطعة.</p>
                </div>
                <div>
                    <label class="block text-sm font-bold text-warm-700 mb-2">لوجو البراند</label>
                    <input name="brand_logo" type="file" accept="image/jpeg,image/png,image/webp" class="w-full px-3 py-2.5 rounded-xl border border-sand bg-cream/70 text-sm file:border-0 file:rounded-lg file:bg-olive-100 file:text-warm-700 file:px-3 file:py-1.5 file:ml-3">
                    <p class="text-xs text-warm-400 mt-2">JPG أو PNG أو WEBP، بحد أقصى 5MB.</p>
                </div>
            </div>

            <div>
                <label class="block text-sm font-bold text-warm-700 mb-2">ملاحظات إضافية</label>
                <textarea name="notes" rows="4" class="w-full px-4 py-3 rounded-xl border border-sand bg-cream/70 text-sm focus:border-terracotta outline-none transition-all resize-none" placeholder="أي تفاصيل إضافية عن المنتج..."></textarea>
            </div>
            <button type="submit" class="w-full py-4 bg-terracotta text-ivory font-semibold rounded-xl hover:bg-olive-800 transition-all duration-300 flex items-center justify-center gap-2"><i class="fas fa-paper-plane text-sm"></i> إرسال طلب عرض السعر</button>
        </form>
    </div>
</section>
