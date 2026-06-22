<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight">
            {{ __('Edit Career') }}
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
                <form action="{{ route('admin.careers.update', $career->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Name -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">اسم الوظيفة <span class="text-red-500">*</span></label>
                            <input type="text" name="name" value="{{ old('name', $career->name) }}" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:outline-none focus:ring-1 focus:ring-[#6F8F7A] focus:border-[#6F8F7A] text-sm" required>
                        </div>

                        <!-- Department -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">القسم <span class="text-red-500">*</span></label>
                            <input type="text" name="depart" value="{{ old('depart', $career->depart) }}" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:outline-none focus:ring-1 focus:ring-[#6F8F7A] focus:border-[#6F8F7A] text-sm" required>
                        </div>

                        <!-- Location -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">الموقع</label>
                            <input type="text" name="location" value="{{ old('location', $career->location) }}" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:outline-none focus:ring-1 focus:ring-[#6F8F7A] focus:border-[#6F8F7A] text-sm">
                        </div>

                        <!-- Experience -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">الخبرة</label>
                            <input type="text" name="experience" value="{{ old('experience', $career->experience) }}" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:outline-none focus:ring-1 focus:ring-[#6F8F7A] focus:border-[#6F8F7A] text-sm">
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="mt-6">
                        <label class="block text-sm font-medium text-gray-700 mb-1">الوصف الوظيفي</label>
                        <textarea name="description" rows="5" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:outline-none focus:ring-1 focus:ring-[#6F8F7A] focus:border-[#6F8F7A] text-sm">{{ old('description', $career->description) }}</textarea>
                    </div>

                    <div class="mt-6 flex items-center gap-4">
                        <button type="submit" class="bg-[#6F8F7A] hover:bg-[#587061] text-white px-6 py-2.5 rounded-lg text-sm font-medium transition">
                            تحديث الوظيفة
                        </button>
                        <a href="{{ route('admin.careers.index') }}" class="text-gray-500 hover:text-gray-700 text-sm font-medium transition">إلغاء</a>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-app-layout>
