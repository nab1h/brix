<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight">
            {{ __('Portfolios Management') }}
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
                    <h3 class="text-2xl font-bold text-gray-900">إدارة الأعمال (Portfolio)</h3>
                    <p class="text-gray-500 text-sm mt-1">عرض وإدارة المشاريع السابقة.</p>
                </div>

                <div class="flex gap-3 items-center flex-wrap">
                    <!-- Filters -->
                    <form action="{{ route('admin.portfolios.index') }}" method="GET" class="flex gap-2 items-center">
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="بحث بالاسم..."
                            class="bg-white border border-gray-300 text-gray-900 rounded-lg px-3 py-2.5 focus:outline-none focus:ring-1 focus:ring-[#6F8F7A] focus:border-[#6F8F7A] w-40 text-sm">

                        <select name="brand_id" onchange="this.form.submit()"
                            class="bg-white border border-gray-300 text-gray-900 rounded-lg px-3 py-2.5 focus:outline-none focus:ring-1 focus:ring-[#6F8F7A] focus:border-[#6F8F7A] cursor-pointer text-sm">
                            <option value="">كل البراندات</option>
                            @foreach($brands as $brand)
                            <option value="{{ $brand->id }}" {{ request('brand_id') == $brand->id ? 'selected' : '' }}>{{ $brand->name }}</option>
                            @endforeach
                        </select>

                        <select name="cat_id" onchange="this.form.submit()"
                            class="bg-white border border-gray-300 text-gray-900 rounded-lg px-3 py-2.5 focus:outline-none focus:ring-1 focus:ring-[#6F8F7A] focus:border-[#6F8F7A] cursor-pointer text-sm">
                            <option value="">كل الأقسام</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ request('cat_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </form>

                    <a href="{{ route('admin.portfolios.create') }}" class="bg-[#6F8F7A] hover:bg-[#587061] text-white px-4 py-2.5 rounded-lg text-sm font-medium transition flex items-center gap-2">
                        <i class="fas fa-plus"></i> إضافة مشروع
                    </a>
                </div>
            </div>

            <!-- Stats -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
                <div class="bg-white p-4 rounded-xl border border-gray-200 shadow-sm">
                    <p class="text-gray-500 text-xs">إجمالي المشاريع</p>
                    <h4 class="text-xl text-gray-900 font-bold mt-1">{{ $totalPortfolios }}</h4>
                </div>
            </div>

            <!-- Table -->
            <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden shadow-sm">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-gray-700">
                        <thead class="bg-gray-50 text-gray-500 text-xs uppercase border-b border-gray-200">
                            <tr>
                                <th class="px-6 py-4 text-start">#ID</th>
                                <th class="px-6 py-4 text-start">الصورة</th>
                                <th class="px-6 py-4 text-start">اسم المشروع</th>
                                <th class="px-6 py-4 text-start">البراند</th>
                                <th class="px-6 py-4 text-start">القسم</th>
                                <th class="px-6 py-4 text-start">الحالة</th>
                                <th class="px-6 py-4 text-center">إجراءات</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($portfolios as $portfolio)
                            <tr class="border-b border-gray-100 hover:bg-gray-50/50 transition duration-200">
                                <td class="px-6 py-4 font-mono text-xs text-gray-400">#{{ $portfolio->id }}</td>

                                <td class="px-6 py-4">
                                    @if($portfolio->image)
                                    <img src="{{ Storage::url($portfolio->image) }}" alt="{{ $portfolio->name }}" class="w-12 h-12 rounded-lg object-cover shadow-sm">
                                    @else
                                    <div class="w-12 h-12 rounded-lg bg-gray-100 flex items-center justify-center text-gray-400">
                                        <i class="fas fa-image"></i>
                                    </div>
                                    @endif
                                </td>

                                <td class="px-6 py-4 text-gray-900 font-medium">{{ $portfolio->name }}</td>

                                <td class="px-6 py-4">
                                    <span class="bg-blue-50 text-blue-700 border border-blue-200 px-2 py-0.5 rounded-full text-xs">
                                        {{ $portfolio->brand->name ?? '-' }}
                                    </span>
                                </td>

                                <td class="px-6 py-4">
                                    <span class="bg-purple-50 text-purple-700 border border-purple-200 px-2 py-0.5 rounded-full text-xs">
                                        {{ $portfolio->category->name ?? '-' }}
                                    </span>
                                </td>

                                <td class="px-6 py-4">
                                    @if($portfolio->status == 1)
                                    <span class="bg-green-50 text-green-700 border border-green-200 px-3 py-1 text-xs rounded-full">مفعل</span>
                                    @else
                                    <span class="bg-red-50 text-red-700 border border-red-200 px-3 py-1 text-xs rounded-full">معطل</span>
                                    @endif
                                </td>

                                <td class="px-6 py-4 text-center">
                                    <div class="flex justify-center gap-2 items-center flex-wrap">
                                        <a href="{{ route('admin.portfolios.edit', $portfolio->id) }}" class="w-8 h-8 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 hover:bg-blue-600 hover:text-white transition" title="تعديل">
                                            <i class="fas fa-pen text-xs"></i>
                                        </a>

                                        <form action="{{ route('admin.portfolios.destroy', $portfolio->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="w-8 h-8 rounded-full bg-red-50 flex items-center justify-center text-red-600 hover:bg-red-600 hover:text-white transition"
                                                title="حذف"
                                                onclick="return confirm('هل أنت متأكد من حذف هذا المشروع؟')">
                                                <i class="fas fa-trash-alt text-xs"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center py-10 text-gray-500">
                                    لا توجد مشاريع حالياً
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="p-4 border-t border-gray-200 text-gray-600 text-sm flex justify-between items-center bg-gray-50/50">
                    <span>
                        عرض {{ $portfolios->firstItem() ?? 0 }} إلى {{ $portfolios->lastItem() ?? 0 }} من إجمالي {{ $portfolios->total() }}
                    </span>
                    {{ $portfolios->links() }}
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
