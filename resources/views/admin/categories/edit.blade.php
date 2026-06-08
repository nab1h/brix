<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight">
            {{ __('Edit Category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            @if ($errors->any())
            <div class="mb-6 bg-red-50 border border-red-200 text-red-700 rounded-lg p-4 text-sm">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="bg-white border border-gray-200 rounded-2xl shadow-sm p-6">
                <form action="{{ route('admin.categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="grid grid-cols-1 gap-6">
                        <!-- Name -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">اسم القسم <span class="text-red-500">*</span></label>
                            <input type="text" name="name" value="{{ old('name', $category->name) }}" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:outline-none focus:ring-1 focus:ring-[#E60914] focus:border-[#E60914] text-sm" required>
                        </div>

                        <!-- Image -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">صورة القسم</label>
                            @if($category->img)
                            <div class="mb-2">
                                <img src="{{ Storage::url($category->img) }}" class="w-20 h-20 rounded-lg object-cover shadow-sm">
                            </div>
                            @endif
                            <input type="file" name="img" accept="image/*" class="w-full border border-gray-300 rounded-lg px-4 py-2 bg-white text-sm file:mr-4 file:py-1 file:px-3 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-red-50 file:text-[#E60914] hover:file:bg-red-100">
                            <p class="text-xs text-gray-400 mt-1">اتركه فارغاً إذا لا تريد تغيير الصورة</p>
                        </div>

                        <!-- Description -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">الوصف</label>
                            <textarea name="description" rows="4" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:outline-none focus:ring-1 focus:ring-[#E60914] focus:border-[#E60914] text-sm">{{ old('description', $category->description) }}</textarea>
                        </div>
                    </div>

                    <div class="mt-6 flex items-center gap-4">
                        <button type="submit" class="bg-[#E60914] hover:bg-red-700 text-white px-6 py-2.5 rounded-lg text-sm font-medium transition">
                            تحديث القسم
                        </button>
                        <a href="{{ route('admin.categories.index') }}" class="text-gray-500 hover:text-gray-700 text-sm font-medium transition">إلغاء</a>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-app-layout>
