<x-app-layout>
    <x-slot name="header"><h2 class="font-semibold text-xl text-gray-900">مواصفات خدمة: {{ $category->name }}</h2></x-slot>
    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            @if(session('status'))<div class="mb-6 bg-green-50 border border-green-200 text-green-700 rounded-lg p-4 text-sm">{{ session('status') }}</div>@endif
            <div class="flex flex-wrap justify-between items-center gap-4 mb-7">
                <div>
                    <h3 class="text-2xl font-bold text-gray-900">حقول نموذج عرض السعر</h3>
                    <p class="text-sm text-gray-500 mt-1">هذه الحقول فقط ستظهر للعميل عند اختيار الخدمة.</p>
                </div>
                <div class="flex gap-3">
                    <a href="{{ route('admin.categories.index') }}" class="px-4 py-2.5 text-sm text-gray-600 border rounded-lg">رجوع للخدمات</a>
                    <a href="{{ route('admin.categories.specifications.create', $category) }}" class="bg-[#6F8F7A] text-white px-4 py-2.5 rounded-lg text-sm"><i class="fas fa-plus ml-1"></i> إضافة مواصفة</a>
                </div>
            </div>
            <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden shadow-sm">
                <table class="w-full text-sm text-gray-700">
                    <thead class="bg-gray-50 border-b"><tr><th class="p-4 text-start">الترتيب</th><th class="p-4 text-start">المواصفة</th><th class="p-4 text-start">النوع</th><th class="p-4 text-start">الحالة</th><th class="p-4">إجراءات</th></tr></thead>
                    <tbody>
                    @forelse($category->specifications as $field)
                        <tr class="border-b">
                            <td class="p-4">{{ $field->sort_order }}</td>
                            <td class="p-4 font-medium text-gray-900">{{ $field->label }} @if($field->unit)<span class="text-gray-400">({{ $field->unit }})</span>@endif</td>
                            <td class="p-4">{{ ['text'=>'نص','number'=>'رقم','select'=>'اختيارات','textarea'=>'نص طويل'][$field->type] }}</td>
                            <td class="p-4"><span class="px-2 py-1 rounded-full text-xs {{ $field->is_required ? 'bg-red-50 text-red-700' : 'bg-gray-100 text-gray-600' }}">{{ $field->is_required ? 'مطلوب' : 'اختياري' }}</span></td>
                            <td class="p-4"><div class="flex justify-center gap-2"><a href="{{ route('admin.specifications.edit', $field) }}" class="w-8 h-8 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center"><i class="fas fa-pen text-xs"></i></a><form method="POST" action="{{ route('admin.specifications.destroy', $field) }}">@csrf @method('DELETE')<button onclick="return confirm('حذف هذه المواصفة؟')" class="w-8 h-8 rounded-full bg-red-50 text-red-600"><i class="fas fa-trash text-xs"></i></button></form></div></td>
                        </tr>
                    @empty
                        <tr><td colspan="5" class="p-10 text-center text-gray-500">لا توجد مواصفات بعد. أضف الحقول المناسبة لهذه الخدمة.</td></tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
