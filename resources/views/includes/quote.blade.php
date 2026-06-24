<section id="quote" class="pricing-bg pricing-bg-right py-20 md:py-28 bg-olive-100 relative overflow-hidden">
    <div class="max-w-[1400px] mx-auto px-6 md:px-12 relative z-10">
        <div class="text-center mb-12">
            <span class="reveal text-terracotta text-sm font-bold tracking-[0.15em]">عرض سعر</span>
            <h2 class="reveal reveal-delay-1 font-serif text-3xl md:text-4xl font-bold text-warm-900 mt-4">أخبرنا عن <span class="text-terracotta">مشروعك</span></h2>
            <p class="reveal reveal-delay-2 text-warm-500 mt-3">اختر الخدمة وستظهر المواصفات الخاصة بها تلقائياً.</p>
        </div>

        @if(session('status'))
            <div class="max-w-3xl mx-auto mb-6 rounded-xl border border-olive-200 bg-white px-5 py-4 text-sm font-medium text-warm-800"><i class="fas fa-check-circle text-terracotta ml-2"></i>{{ session('status') }}</div>
        @endif
        @if($errors->any())
            <div class="max-w-3xl mx-auto mb-6 rounded-xl border border-red-200 bg-red-50 px-5 py-4 text-sm text-red-700">
                <p class="font-bold mb-2">راجع البيانات التالية:</p>
                <ul class="list-disc list-inside space-y-1">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
            </div>
        @endif

        <div class="grid lg:grid-cols-5 gap-8 lg:gap-10 items-start">
            <form id="reservation-form" action="{{ route('reservations.store') }}" method="POST" enctype="multipart/form-data"
                class="contact-bg-form reveal lg:col-span-3 bg-white border border-sand rounded-2xl p-7 md:p-9 space-y-5">
                @csrf
                <div class="grid sm:grid-cols-2 gap-5">
                    <div><label class="block text-sm font-bold text-warm-700 mb-2">الاسم *</label><input name="name" value="{{ old('name') }}" required class="quote-input"></div>
                    <div><label class="block text-sm font-bold text-warm-700 mb-2">الشركة</label><input name="brand" value="{{ old('brand') }}" class="quote-input"></div>
                    <div><label class="block text-sm font-bold text-warm-700 mb-2">الهاتف *</label><input name="phone" type="tel" value="{{ old('phone') }}" required class="quote-input"></div>
                    <div><label class="block text-sm font-bold text-warm-700 mb-2">البريد الإلكتروني *</label><input name="email" type="email" value="{{ old('email') }}" required class="quote-input"></div>
                </div>

                <div>
                    <label class="block text-sm font-bold text-warm-700 mb-2">نوع الخدمة *</label>
                    <select id="category-select" name="category_id" required class="quote-input">
                        <option value="">اختر نوع الخدمة</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" @selected((string) old('category_id') === (string) $category->id)>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div id="specifications-section" class="hidden pt-3">
                    <h3 class="text-lg font-semibold text-warm-900">مواصفات الخدمة</h3>
                    <p class="text-sm text-warm-500 mt-1 mb-5">املأ التفاصيل المطلوبة للخدمة التي اخترتها.</p>
                    <div id="dynamic-specifications" class="grid sm:grid-cols-2 gap-5"></div>
                </div>
                <div id="no-specifications" class="hidden rounded-xl bg-olive-50 border border-olive-200 p-4 text-sm text-warm-600">لا تحتاج هذه الخدمة إلى مواصفات إضافية؛ يمكنك إرسال الطلب مباشرة.</div>

                <div>
                    <label class="block text-sm font-bold text-warm-700 mb-2">لوجو البراند</label>
                    <input name="brand_logo" type="file" accept="image/jpeg,image/png,image/webp" class="w-full px-3 py-2.5 rounded-xl border border-sand bg-cream/70 text-sm file:border-0 file:rounded-lg file:bg-olive-100 file:px-3 file:py-1.5">
                    <p class="text-xs text-warm-400 mt-2">JPG أو PNG أو WEBP، بحد أقصى 5MB.</p>
                </div>
                <div><label class="block text-sm font-bold text-warm-700 mb-2">ملاحظات إضافية</label><textarea name="notes" rows="4" class="quote-input resize-none" placeholder="أي تفاصيل إضافية عن المشروع...">{{ old('notes') }}</textarea></div>
                <button type="submit" class="w-full py-4 bg-terracotta text-ivory font-semibold rounded-xl hover:bg-olive-800 transition-all flex items-center justify-center gap-2"><i class="fas fa-paper-plane text-sm"></i> إرسال طلب عرض السعر</button>
            </form>

            <aside class="lg:col-span-2 space-y-6 lg:sticky lg:top-28">
                <div class="reveal bg-white border border-sand rounded-2xl overflow-hidden">
                    <div class="aspect-video bg-warm-900"><video controls preload="metadata" poster="{{ asset('images-layout/default-card.png') }}" class="w-full h-full object-cover"><source src="{{ asset('videos/quote-guide.mp4') }}" type="video/mp4"></video></div>
                    <div class="p-5"><h3 class="font-semibold text-warm-900"><i class="fas fa-play text-terracotta ml-2"></i>كيف تحدد مواصفات منتجك؟</h3><p class="text-xs text-warm-500 mt-2">شاهد الفيديو قبل إرسال الطلب للتأكد من التفاصيل.</p></div>
                </div>
                <div class="reveal bg-white border border-sand rounded-2xl p-6">
                    <span class="text-xs font-semibold text-terracotta">ملخص مباشر</span>
                    <h3 class="text-lg font-semibold text-warm-900 mt-1 mb-4">مواصفات طلبك</h3>
                    <dl id="quote-summary" class="divide-y divide-sand text-sm"><div class="flex justify-between gap-4 py-3"><dt class="text-warm-500">الخدمة</dt><dd id="summary-category" class="font-medium text-warm-800">لم تحدد</dd></div></dl>
                </div>
            </aside>
        </div>
    </div>
</section>

<style>.quote-input{width:100%;padding:.75rem 1rem;border-radius:.75rem;border:1px solid #ddd2c0;background:rgba(255,251,241,.7);font-size:.875rem;outline:none}.quote-input:focus{border-color:#c96f4a}</style>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const services = @json($categories->mapWithKeys(fn($category) => [$category->id => ['name' => $category->name, 'fields' => $category->specifications]]));
    const oldAnswers = @json(old('specifications', []));
    const select = document.getElementById('category-select');
    const container = document.getElementById('dynamic-specifications');
    const section = document.getElementById('specifications-section');
    const empty = document.getElementById('no-specifications');
    const summary = document.getElementById('quote-summary');

    function render() {
        const service = services[select.value];
        container.innerHTML = '';
        summary.querySelectorAll('[data-spec-summary]').forEach(el => el.remove());
        document.getElementById('summary-category').textContent = service?.name || 'لم تحدد';
        section.classList.add('hidden'); empty.classList.add('hidden');
        if (!service) return;
        if (!service.fields.length) { empty.classList.remove('hidden'); return; }
        section.classList.remove('hidden');

        service.fields.forEach(field => {
            const wrapper = document.createElement('div');
            if (field.type === 'textarea') wrapper.classList.add('sm:col-span-2');
            const label = document.createElement('label');
            label.className = 'block text-sm font-bold text-warm-700 mb-2';
            label.textContent = field.label + (field.unit ? ` (${field.unit})` : '') + (field.is_required ? ' *' : '');
            let input;
            if (field.type === 'select') {
                input = document.createElement('select');
                input.append(new Option('اختر...', ''));
                (field.options || []).forEach(option => input.append(new Option(option, option)));
            } else if (field.type === 'textarea') {
                input = document.createElement('textarea'); input.rows = 4;
            } else {
                input = document.createElement('input'); input.type = field.type;
                if (field.type === 'number') input.step = 'any';
            }
            input.name = `specifications[${field.id}]`;
            input.required = Boolean(field.is_required);
            input.placeholder = field.placeholder || '';
            input.className = 'quote-input';
            input.value = oldAnswers[field.id] ?? '';
            wrapper.append(label, input); container.append(wrapper);

            const row = document.createElement('div'); row.dataset.specSummary = '1'; row.className = 'flex justify-between gap-4 py-3';
            const dt = document.createElement('dt'); dt.className = 'text-warm-500'; dt.textContent = field.label;
            const dd = document.createElement('dd'); dd.className = 'font-medium text-warm-800 text-left';
            const update = () => dd.textContent = input.value ? input.value + (field.unit ? ` ${field.unit}` : '') : '—';
            input.addEventListener('input', update); update(); row.append(dt, dd); summary.append(row);
        });
    }
    select.addEventListener('change', render); render();
});
</script>
