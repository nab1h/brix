@php($currentType = old('type', $specification->type ?? 'text'))
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">اسم المواصفة <span class="text-red-500">*</span></label>
        <input name="label" value="{{ old('label', $specification->label ?? '') }}" required
            placeholder="مثال: الارتفاع أو نوع الورق"
            class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:ring-[#6F8F7A] focus:border-[#6F8F7A]">
    </div>
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">نوع الحقل <span class="text-red-500">*</span></label>
        <select name="type" id="field-type" required
            class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:ring-[#6F8F7A] focus:border-[#6F8F7A]">
            <option value="text" @selected($currentType === 'text')>نص قصير</option>
            <option value="number" @selected($currentType === 'number')>رقم / مقاس</option>
            <option value="select" @selected($currentType === 'select')>قائمة اختيارات</option>
            <option value="textarea" @selected($currentType === 'textarea')>نص طويل</option>
        </select>
    </div>
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">وحدة القياس</label>
        <input name="unit" value="{{ old('unit', $specification->unit ?? '') }}" placeholder="سم، جرام، مم..."
            class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:ring-[#6F8F7A] focus:border-[#6F8F7A]">
    </div>
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">النص الإرشادي</label>
        <input name="placeholder" value="{{ old('placeholder', $specification->placeholder ?? '') }}" placeholder="مثال: أدخل الارتفاع"
            class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:ring-[#6F8F7A] focus:border-[#6F8F7A]">
    </div>
    <div id="options-wrapper" class="md:col-span-2 {{ $currentType === 'select' ? '' : 'hidden' }}">
        <label class="block text-sm font-medium text-gray-700 mb-1">الاختيارات <span class="text-red-500">*</span></label>
        <textarea name="options_text" rows="5" placeholder="كوشيه&#10;بريستول&#10;فنلندي"
            class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:ring-[#6F8F7A] focus:border-[#6F8F7A]">{{ old('options_text', isset($specification) ? implode("\n", $specification->options ?? []) : '') }}</textarea>
        <p class="text-xs text-gray-500 mt-1">اكتب كل اختيار في سطر منفصل.</p>
    </div>
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">الترتيب</label>
        <input type="number" name="sort_order" min="0" value="{{ old('sort_order', $specification->sort_order ?? 0) }}"
            class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:ring-[#6F8F7A] focus:border-[#6F8F7A]">
    </div>
    <label class="flex items-center gap-3 self-end pb-3 cursor-pointer">
        <input type="hidden" name="is_required" value="0">
        <input type="checkbox" name="is_required" value="1" @checked(old('is_required', $specification->is_required ?? false))
            class="rounded border-gray-300 text-[#6F8F7A] focus:ring-[#6F8F7A]">
        <span class="text-sm font-medium text-gray-700">هذا الحقل مطلوب</span>
    </label>
</div>

<script>
document.getElementById('field-type').addEventListener('change', function () {
    document.getElementById('options-wrapper').classList.toggle('hidden', this.value !== 'select');
});
</script>
