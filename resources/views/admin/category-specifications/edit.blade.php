<x-app-layout>
    <x-slot name="header"><h2 class="font-semibold text-xl text-gray-900">تعديل المواصفة</h2></x-slot>
    <div class="py-12"><div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
        @if($errors->any())<div class="mb-6 bg-red-50 border border-red-200 text-red-700 rounded-lg p-4 text-sm"><ul class="list-disc list-inside">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>@endif
        <form method="POST" action="{{ route('admin.specifications.update', $specification) }}" class="bg-white border rounded-2xl shadow-sm p-6">@csrf @method('PUT')
            @include('admin.category-specifications._form')
            <div class="mt-7 flex gap-3"><button class="bg-[#6F8F7A] text-white px-6 py-2.5 rounded-lg text-sm">حفظ التعديلات</button><a href="{{ route('admin.categories.specifications.index', $specification->category_id) }}" class="px-5 py-2.5 text-sm text-gray-600">إلغاء</a></div>
        </form>
    </div></div>
</x-app-layout>
