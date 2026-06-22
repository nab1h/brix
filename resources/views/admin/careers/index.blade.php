<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight">
            {{ __('Careers Management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (session('status'))
            <div class="mb-6 bg-green-50 border border-green-200 text-green-700 rounded-lg p-4 text-sm flex items-center gap-2">
                <i class="fas fa-check-circle"></i> {{ session('status') }}
            </div>
            @endif

            <!-- Title & Actions -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
                <div>
                    <h3 class="text-2xl font-bold text-gray-900">إدارة الوظائف الشاغرة</h3>
                    <p class="text-gray-500 text-sm mt-1">إضافة وتعديل الوظائف المتاحة في الشركة.</p>
                </div>

                <div class="flex gap-3 items-center">
                    <!-- Search -->
                    <form action="{{ route('admin.careers.index') }}" method="GET" class="flex">
                        <div class="relative group mx-2">
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                <i class="fas fa-search text-gray-400 group-focus-within:text-[#6F8F7A] transition"></i>
                            </div>
                            <input type="text" name="search" value="{{ request('search') }}" placeholder="بحث بالاسم أو القسم..."
                                class="bg-white border border-gray-300 text-gray-900 rounded-lg pl-3 pr-10 py-2.5 focus:outline-none focus:ring-1 focus:ring-[#6F8F7A] focus:border-[#6F8F7A] w-56 transition text-sm placeholder-gray-400">
                        </div>
                    </form>

                    <!-- Create Button -->
                    <a href="{{ route('admin.careers.create') }}" class="bg-[#6F8F7A] hover:bg-[#587061] text-white px-4 py-2.5 rounded-lg text-sm font-medium transition flex items-center gap-2">
                        <i class="fas fa-plus"></i> إضافة وظيفة
                    </a>
                </div>
            </div>

            <!-- Stats -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
                <div class="bg-white p-4 rounded-xl border border-gray-200 shadow-sm">
                    <p class="text-gray-500 text-xs">إجمالي الوظائف</p>
                    <h4 class="text-xl text-gray-900 font-bold mt-1">{{ $totalCareers }}</h4>
                </div>
            </div>

            <!-- Table -->
            <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden shadow-sm">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-gray-700">
                        <thead class="bg-gray-50 text-gray-500 text-xs uppercase border-b border-gray-200">
                            <tr>
                                <th class="px-6 py-4 text-start">#ID</th>
                                <th class="px-6 py-4 text-start">اسم الوظيفة</th>
                                <th class="px-6 py-4 text-start">القسم</th>
                                <th class="px-6 py-4 text-start">الموقع</th>
                                <th class="px-6 py-4 text-start">الخبرة</th>
                                <th class="px-6 py-4 text-center">إجراءات</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($careers as $career)
                            <tr class="border-b border-gray-100 hover:bg-gray-50/50 transition duration-200">
                                <td class="px-6 py-4 font-mono text-xs text-gray-400">#{{ $career->id }}</td>

                                <td class="px-6 py-4 text-gray-900 font-medium">{{ $career->name }}</td>

                                <td class="px-6 py-4">
                                    <span class="bg-blue-50 text-blue-700 border border-blue-200 px-2 py-0.5 rounded-full text-xs">
                                        {{ $career->depart }}
                                    </span>
                                </td>

                                <td class="px-6 py-4 text-gray-600 flex items-center gap-1">
                                    <i class="fas fa-map-marker-alt text-gray-400 text-xs"></i>
                                    {{ $career->location ?? '-' }}
                                </td>

                                <td class="px-6 py-4 text-gray-600">
                                    {{ $career->experience ?? '-' }}
                                </td>

                                <td class="px-6 py-4 text-center">
                                    <div class="flex justify-center gap-2 items-center flex-wrap">
                                        <!-- Edit -->
                                        <a href="{{ route('admin.careers.edit', $career->id) }}" class="w-8 h-8 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 hover:bg-blue-600 hover:text-white transition" title="تعديل">
                                            <i class="fas fa-pen text-xs"></i>
                                        </a>

                                        <!-- Delete -->
                                        <form action="{{ route('admin.careers.destroy', $career->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="w-8 h-8 rounded-full bg-red-50 flex items-center justify-center text-red-600 hover:bg-red-600 hover:text-white transition"
                                                title="حذف"
                                                onclick="return confirm('هل أنت متأكد من حذف هذه الوظيفة؟')">
                                                <i class="fas fa-trash-alt text-xs"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center py-10 text-gray-500">
                                    لا توجد وظائف حالياً
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="p-4 border-t border-gray-200 text-gray-600 text-sm flex justify-between items-center bg-gray-50/50">
                    <span>
                        عرض {{ $careers->firstItem() ?? 0 }} إلى {{ $careers->lastItem() ?? 0 }} من إجمالي {{ $careers->total() }}
                    </span>
                    {{ $careers->links() }}
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
