<section id="quote" class="pricing-bg pricing-bg-right py-20 md:py-28 bg-olive-100 relative overflow-hidden">
    <div class="max-w-[1400px] mx-auto px-6 md:px-12 relative z-10">
        <div class="text-center mb-12">
            <span class="reveal text-terracotta text-sm font-bold tracking-[0.15em]">عرض سعر</span>
            <h2 class="reveal reveal-delay-1 font-serif text-3xl md:text-4xl font-bold text-warm-900 mt-4">أخبرنا عن <span class="text-terracotta">مشروعك</span></h2>
            <p class="reveal reveal-delay-2 text-warm-500 mt-3">املأ النموذج وسنقدم لك عرض سعر مخصص خلال ٢٤ ساعة</p>
        </div>
        @if(session('status'))
        <div class="max-w-3xl mx-auto mb-6 rounded-xl border border-olive-200 bg-white px-5 py-4 text-sm font-medium text-warm-800 flex items-center gap-3">
            <i class="fas fa-check-circle text-terracotta"></i>
            <span>{{ session('status') }}</span>
        </div>
        @endif
        <div class="grid lg:grid-cols-5 gap-8 lg:gap-10 items-start">
        <form id="reservation-form" action="{{ route('reservations.store') }}" method="POST" enctype="multipart/form-data" class="contact-bg-form reveal lg:col-span-3 bg-white border border-sand rounded-2xl p-7 md:p-9 space-y-5">
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

        <aside class="lg:col-span-2 space-y-6 lg:sticky lg:top-28">
            <div class="reveal bg-white border border-sand rounded-2xl overflow-hidden">
                <div class="aspect-video bg-warm-900">
                    <video controls preload="metadata" poster="{{ asset('images-layout/default-card.png') }}" class="w-full h-full object-cover">
                        <source src="{{ asset('videos/quote-guide.mp4') }}" type="video/mp4">
                        متصفحك لا يدعم تشغيل الفيديو.
                    </video>
                </div>
                <div class="p-5">
                    <div class="flex items-center gap-3">
                        <span class="w-10 h-10 rounded-xl bg-olive-100 text-terracotta flex items-center justify-center"><i class="fas fa-play text-xs"></i></span>
                        <div>
                            <h3 class="font-semibold text-warm-900">كيف تحدد مواصفات منتجك؟</h3>
                            <p class="text-xs text-warm-500 mt-1">شاهد الفيديو قبل إرسال الطلب للتأكد من المقاسات.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="reveal bg-white border border-sand rounded-2xl p-6">
                <div class="flex items-center justify-between gap-4 mb-5">
                    <div>
                        <span class="text-xs font-semibold text-terracotta">ملخص مباشر</span>
                        <h3 class="text-lg font-semibold text-warm-900 mt-1">مواصفات طلبك</h3>
                    </div>
                    <span class="w-11 h-11 rounded-xl bg-olive-100 text-terracotta flex items-center justify-center"><i class="fas fa-clipboard-list"></i></span>
                </div>

                <dl class="divide-y divide-sand text-sm">
                    <div class="flex justify-between gap-4 py-3"><dt class="text-warm-500">الخدمة</dt><dd id="summary-category" class="font-medium text-warm-800 text-left">لم تحدد</dd></div>
                    <div class="flex justify-between gap-4 py-3"><dt class="text-warm-500">المقاسات</dt><dd id="summary-dimensions" class="font-medium text-warm-800 text-left" dir="ltr">—</dd></div>
                    <div class="flex justify-between gap-4 py-3"><dt class="text-warm-500">الوزن</dt><dd id="summary-weight" class="font-medium text-warm-800">لم تحدد</dd></div>
                    <div class="flex justify-between gap-4 py-3"><dt class="text-warm-500">الخامة</dt><dd id="summary-material" class="font-medium text-warm-800">لم تحدد</dd></div>
                    <div class="flex justify-between gap-4 py-3"><dt class="text-warm-500">الكمية</dt><dd id="summary-quantity" class="font-medium text-warm-800">1,000 قطعة</dd></div>
                    <div class="flex justify-between gap-4 py-3"><dt class="text-warm-500">اللوجو</dt><dd id="summary-logo" class="font-medium text-warm-800 max-w-[180px] truncate">لم يُرفع</dd></div>
                </dl>

                <div class="mt-5 rounded-xl bg-cream p-4">
                    <span class="block text-xs text-warm-500 mb-2">ملاحظاتك</span>
                    <p id="summary-notes" class="text-sm text-warm-700 leading-7 break-words">لا توجد ملاحظات إضافية.</p>
                </div>
            </div>
        </aside>
        </div>
    </div>
</section>

<script>
    (function () {
        const form = document.getElementById('reservation-form');
        if (!form) return;

        const field = (name) => form.elements.namedItem(name);
        const setText = (id, value) => {
            const element = document.getElementById(id);
            if (element) element.textContent = value;
        };

        function updateQuoteSummary() {
            const length = field('product_length')?.value;
            const width = field('product_width')?.value;
            const height = field('product_height')?.value;
            const dimensions = length || width || height
                ? `${length || '—'} × ${width || '—'} × ${height || '—'} cm`
                : '—';
            const quantity = Number(field('quantity')?.value || 0);
            const logoFile = field('brand_logo')?.files?.[0];

            setText('summary-category', field('category')?.value || 'لم تحدد');
            setText('summary-dimensions', dimensions);
            setText('summary-weight', field('paper_weight')?.value ? `${field('paper_weight').value} جرام` : 'لم تحدد');
            setText('summary-material', field('material')?.value || 'لم تحدد');
            setText('summary-quantity', quantity ? `${quantity.toLocaleString('ar-EG')} قطعة` : 'لم تحدد');
            setText('summary-logo', logoFile ? logoFile.name : 'لم يُرفع');
            setText('summary-notes', field('notes')?.value.trim() || 'لا توجد ملاحظات إضافية.');
        }

        form.addEventListener('input', updateQuoteSummary);
        form.addEventListener('change', updateQuoteSummary);
        form.addEventListener('reset', function () {
            setTimeout(updateQuoteSummary, 0);
        });
        updateQuoteSummary();
    })();
</script>
