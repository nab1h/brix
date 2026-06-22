<section id="contact" class="contact-bg relative py-20 md:py-28 overflow-hidden bg-white">

    <div class="max-w-[1400px] mx-auto px-6 md:px-12">
        <div class="text-center mb-14">
            <span class="reveal text-terracotta text-sm font-bold tracking-[0.15em]">تواصل معنا</span>
            <h2 class="reveal reveal-delay-1 font-serif text-3xl md:text-5xl font-bold text-warm-900 mt-4">نحب أن <span class="text-terracotta">نسمع</span> منك</h2>
        </div>
        <div class="grid lg:grid-cols-5 gap-12 md:gap-16">

            <!-- العمود الأيسر: بيانات التواصل + الخريطة -->
            <div class="lg:col-span-2 space-y-8">
                <div class="reveal flex items-start gap-5">
                    <div class="w-12 h-12 rounded-full bg-terracotta/10 flex items-center justify-center flex-shrink-0"><i class="fas fa-phone text-terracotta"></i></div>
                    <div>
                        <h4 class="font-bold mb-1">الهاتف</h4>
                        <p class="text-sm text-warm-500">{{ $setting->mobile }}</p>
                        <p class="text-xs text-warm-400 mt-1">{{ $setting->hours_ar }}</p>
                    </div>
                </div>
                <div class="reveal reveal-delay-1 flex items-start gap-5">
                    <div class="w-12 h-12 rounded-full bg-olive-100 flex items-center justify-center flex-shrink-0"><i class="fas fa-envelope text-olive-600"></i></div>
                    <div>
                        <h4 class="font-bold mb-1">البريد الإلكتروني</h4>
                        <p class="text-sm text-warm-500">{{ $setting->email }}</p>
                        <p class="text-xs text-warm-400 mt-1">نرد خلال ٢٤ ساعة</p>
                    </div>
                </div>
                <div class="reveal reveal-delay-2 flex items-start gap-5">
                    <div class="w-12 h-12 rounded-full bg-brand-blue/10 flex items-center justify-center flex-shrink-0"><i class="fas fa-location-dot text-brand-blue"></i></div>
                    <div>
                        <h4 class="font-bold mb-1">العنوان</h4>
                        <p class="text-sm text-warm-500">{{ $setting->address_ar }}</p>
                    </div>
                </div>
                <div class="reveal reveal-delay-3">
                    <a href="https://wa.me/2{{ $setting->whatsapp }}" target="_blank" class="flex items-center gap-4 p-4 rounded-xl bg-olive-50 border border-olive-200 hover:bg-olive-100 transition-colors">
                        <div class="w-10 h-10 rounded-full bg-olive-600 flex items-center justify-center text-ivory"><i class="fab fa-whatsapp text-lg"></i></div>
                        <div><span class="font-bold text-sm">تواصل عبر واتساب</span><span class="block text-xs text-warm-400">للرد السريع</span></div>
                    </a>
                </div>

                <!-- 🌟 الخريطة المضافة هنا 🌟 -->
                <div class="reveal reveal-delay-4 pt-2">
                    <div class="rounded-2xl overflow-hidden border border-sand shadow-sm bg-cream aspect-video lg:aspect-[4/3]">

                        @if(isset($setting->map_link) && $setting->map_link)
                        <!-- لينك الخريطة المضمن (Embed) -->
                        <iframe
                            src="{{ $setting->map_link }}"
                            width="100%"
                            height="100%"
                            style="border:0; filter: grayscale(20%) contrast(1.1);"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                        @else
                        <!-- شكل بديل لو مفيش لينك خريطة في الداتابيز -->
                        <div class="w-full h-full flex items-center justify-center text-warm-400">
                            <div class="text-center">
                                <i class="fas fa-map-marked-alt text-3xl mb-2 text-terracotta/30"></i>
                                <p class="text-sm">لم يتم إضافة خريطة بعد</p>
                            </div>
                        </div>
                        @endif

                    </div>
                </div>

            </div>

            <!-- العمود الأيمن: الفورم -->
            <div class="lg:col-span-3 relative">
                <form action="{{ route('frontend.contact.store') }}"
                    method="POST"
                    class="contact-bg-form relative reveal border border-sand rounded-2xl p-7 md:p-9 space-y-5 overflow-hidden">
                    @csrf
                    {{-- رسالة النجاح --}}
                    @if (session('status'))
                    <div class="col-span-2 bg-green-50 border border-green-200 text-green-700 rounded-xl p-4 text-sm flex items-center gap-2">
                        <i class="fas fa-check-circle"></i>
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="grid sm:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-sm font-bold text-warm-700 mb-2">الاسم</label>
                            <input name="name" type="text" value="{{ old('name') }}" required
                                class="w-full px-4 py-3 rounded-xl border border-sand bg-cream/70 text-sm focus:border-terracotta outline-none @error('name') border-red-500 @enderror"
                                placeholder="الاسم الكامل">
                            @error('name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-warm-700 mb-2">البريد الإلكتروني</label>
                            <input name="email" type="email" value="{{ old('email') }}" required
                                class="w-full px-4 py-3 rounded-xl border border-sand bg-cream/70 text-sm focus:border-terracotta outline-none @error('email') border-red-500 @enderror"
                                placeholder="email@example.com">
                            @error('email')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="grid sm:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-sm font-bold text-warm-700 mb-2">الهاتف</label>
                            <input name="phone" type="tel" value="{{ old('phone') }}"
                                class="w-full px-4 py-3 rounded-xl border border-sand bg-cream/70 text-sm focus:border-terracotta outline-none"
                                placeholder="+20 1X XXX XXXX">
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-warm-700 mb-2">الموضوع</label>
                            <select name="subject"
                                class="w-full px-4 py-3 rounded-xl border border-sand bg-cream/70 text-sm focus:border-terracotta outline-none">
                                <option value="استفسار عام" {{ old('subject') == 'استفسار عام' ? 'selected' : '' }}>
                                    استفسار عام
                                </option>
                                <option value="طلب عرض سعر" {{ old('subject') == 'طلب عرض سعر' ? 'selected' : '' }}>
                                    طلب عرض سعر
                                </option>
                                <option value="متابعة طلب" {{ old('subject') == 'متابعة طلب' ? 'selected' : '' }}>
                                    متابعة طلب
                                </option>
                                <option value="توظيف" {{ old('subject') == 'توظيف' ? 'selected' : '' }}>
                                    توظيف
                                </option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-warm-700 mb-2">رسالتك</label>
                        <textarea name="msg" rows="5" required
                            class="w-full px-4 py-3 rounded-xl border border-sand bg-cream/70 text-sm focus:border-terracotta outline-none resize-none @error('msg') border-red-500 @enderror"
                            placeholder="أخبرنا عن مشروعك...">{{ old('msg') }}</textarea>

                        @error('msg')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit"
                        class="w-full py-4 bg-terracotta text-ivory font-semibold rounded-xl hover:bg-olive-800 transition-all duration-300 flex items-center justify-center gap-2">
                        <i class="fas fa-paper-plane text-sm"></i>
                        إرسال الرسالة
                    </button>

                </form>

            </div>
        </div>
    </div>
</section>
