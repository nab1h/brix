<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight">
            {{ __('تعديل السؤال') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white border border-gray-200 rounded-2xl p-8 shadow-sm">
                <form action="{{ route('admin.faqs.update', $faq) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-8 border-b border-gray-200 pb-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">تعديل تفاصيل السؤال</h3>
                        <p class="text-gray-600 text-sm">قم بتعديل السؤال والإجابة أو حالة الظهور.</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div>
                            <label class="block text-gray-700 text-sm font-medium mb-2">السؤال</label>
                            <input type="text" name="question_ar" required
                                value="{{ old('question_ar', $faq->question_ar) }}"
                                placeholder="مثال: ما هي ساعات العمل؟"
                                class="w-full bg-white border border-gray-300 rounded-lg px-4 py-3 text-gray-900 focus:outline-none focus:ring-1 focus:ring-[#6F8F7A] focus:border-[#6F8F7A] transition placeholder-gray-400" dir="rtl">
                        </div>

                        <div>
                            <label class="block text-gray-700 text-sm font-medium mb-2">الإجابة</label>
                            <textarea name="answer_ar" rows="5" required
                                class="w-full bg-white border border-gray-300 rounded-lg px-4 py-3 text-gray-900 focus:outline-none focus:ring-1 focus:ring-[#6F8F7A] focus:border-[#6F8F7A] transition placeholder-gray-400 resize-y" dir="rtl">{{ old('answer_ar', $faq->answer_ar) }}</textarea>
                        </div>
                    </div>


                    <div class="bg-gray-50 p-6 rounded-xl border border-gray-200 mb-8">
                        <h4 class="text-lg font-bold text-gray-900 mb-4">إعدادات العرض</h4>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-gray-700 text-sm font-medium mb-2">الترتيب (Order)</label>
                                <input type="number" name="order_column" value="{{ $faq->order_column }}"
                                    class="w-full bg-white border border-gray-300 rounded-lg px-3 py-2 text-gray-900 focus:outline-none focus:ring-1 focus:ring-[#6F8F7A] focus:border-[#6F8F7A] transition">
                                <p class="text-xs text-gray-500 mt-1">رقم لترتيب ظهور السؤال في الموقع</p>
                            </div>

                            <div class="flex items-center mt-6 pt-2 md:pt-0">
                                <input type="checkbox" name="is_active" value="1" {{ $faq->is_active ? 'checked' : '' }}
                                    class="w-5 h-5 accent-[#6F8F7A] rounded border-gray-300">
                                <label class="text-gray-700 ml-3 text-sm">نشط (مظهر في الموقع)</label>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center gap-4 pt-6 border-t border-gray-200">
                        <button type="submit" class="bg-[#6F8F7A] hover:bg-[#587061] text-white font-bold py-3 px-8 rounded-lg transition shadow-sm flex items-center gap-2 focus:outline-none focus:ring-2 focus:ring-[#6F8F7A] focus:ring-offset-2 focus:ring-offset-white">
                            <i class="fas fa-save"></i> حفظ التغييرات
                        </button>
                        <a href="{{ route('admin.faqs.index') }}" class="text-gray-600 hover:text-gray-900 transition font-medium">
                            إلغاء
                        </a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</x-app-layout>
