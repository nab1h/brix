<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight">
            {{ __('Edit Portfolio') }}
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
                <form action="{{ route('admin.portfolios.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Name -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">اسم المشروع <span class="text-red-500">*</span></label>
                            <input type="text" name="name" value="{{ old('name', $portfolio->name) }}" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:outline-none focus:ring-1 focus:ring-[#6F8F7A] focus:border-[#6F8F7A] text-sm" required>
                        </div>

                        <!-- Brand -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">البراند <span class="text-red-500">*</span></label>
                            <select name="brand_id" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:outline-none focus:ring-1 focus:ring-[#6F8F7A] focus:border-[#6F8F7A] text-sm bg-white" required>
                                <option value="">اختر البراند...</option>
                                @foreach($brands as $brand)
                                <option value="{{ $brand->id }}" {{ old('brand_id', $portfolio->brand_id) == $brand->id ? 'selected' : '' }}>{{ $brand->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Category -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">القسم <span class="text-red-500">*</span></label>
                            <select name="cat_id" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:outline-none focus:ring-1 focus:ring-[#6F8F7A] focus:border-[#6F8F7A] text-sm bg-white" required>
                                <option value="">اختر القسم...</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ old('cat_id', $portfolio->cat_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Status -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">الحالة <span class="text-red-500">*</span></label>
                            <select name="status" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:outline-none focus:ring-1 focus:ring-[#6F8F7A] focus:border-[#6F8F7A] text-sm bg-white" required>
                                <option value="1" {{ old('status', $portfolio->status) == 1 ? 'selected' : '' }}>مفعل</option>
                                <option value="0" {{ old('status', $portfolio->status) == 0 ? 'selected' : '' }}>معطل</option>
                            </select>
                        </div>

                        <!-- Image -->
                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700 mb-1">صورة المشروع</label>
                            @if($portfolio->image)
                            <div class="mb-2">
                                <img src="{{ Storage::url($portfolio->image) }}" class="w-20 h-20 rounded-lg object-cover shadow-sm">
                            </div>
                            @endif
                            <input type="file" name="image" accept="image/*" class="w-full border border-gray-300 rounded-lg px-4 py-2 bg-white text-sm file:mr-4 file:py-1 file:px-3 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-gray-100 file:text-[#6F8F7A] hover:file:bg-red-100">
                            <p class="text-xs text-gray-400 mt-1">اتركه فارغاً إذا لا تريد تغيير الصورة</p>
                        </div>

                        <!-- URL -->
                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700 mb-1">رابط المشروع (URL)</label>
                            <input type="url" name="url" value="{{ old('url', $portfolio->url) }}" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:outline-none focus:ring-1 focus:ring-[#6F8F7A] focus:border-[#6F8F7A] text-sm">
                        </div>

                        <!-- Description -->
                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700 mb-1">الوصف</label>
                            <textarea name="description" rows="4" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:outline-none focus:ring-1 focus:ring-[#6F8F7A] focus:border-[#6F8F7A] text-sm">{{ old('description', $portfolio->description) }}</textarea>
                        </div>
                    </div>

                    <div class="mt-6 flex items-center gap-4">
                        <button type="submit" class="bg-[#6F8F7A] hover:bg-[#587061] text-white px-6 py-2.5 rounded-lg text-sm font-medium transition">
                            تحديث المشروع
                        </button>
                        <a href="{{ route('admin.portfolios.index') }}" class="text-gray-500 hover:text-gray-700 text-sm font-medium transition">إلغاء</a>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-app-layout>
