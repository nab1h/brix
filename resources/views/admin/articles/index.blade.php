<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight">{{ __('Articles Management') }}</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (session('status'))
            <div class="mb-6 bg-green-50 border border-green-200 text-green-700 rounded-lg p-4 text-sm flex items-center gap-2">
                <i class="fas fa-check-circle"></i> {{ session('status') }}
            </div>
            @endif

            <div class="flex justify-between items-center mb-8">
                <h3 class="text-2xl font-bold text-gray-900">إدارة المقالات</h3>
                <a href="{{ route('admin.articles.create') }}" class="bg-[#6F8F7A] hover:bg-[#587061] text-white px-4 py-2.5 rounded-lg text-sm font-medium transition flex items-center gap-2">
                    <i class="fas fa-plus"></i> إضافة مقال
                </a>
            </div>

            <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden shadow-sm">
                <table class="w-full text-sm text-gray-700">
                    <thead class="bg-gray-50 text-gray-500 text-xs uppercase border-b border-gray-200">
                        <tr>
                            <th class="px-6 py-4 text-start">#ID</th>
                            <th class="px-6 py-4 text-start">الصورة</th>
                            <th class="px-6 py-4 text-start">العنوان</th>
                            <th class="px-6 py-4 text-center">إجراءات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($articles as $article)
                        <tr class="border-b border-gray-100 hover:bg-gray-50/50 transition">
                            <td class="px-6 py-4 font-mono text-xs text-gray-400">#{{ $article->id }}</td>
                            <td class="px-6 py-4">
                                @if($article->image)
                                <img src="{{ Storage::url($article->image) }}" class="w-12 h-12 rounded-lg object-cover">
                                @else
                                <div class="w-12 h-12 rounded-lg bg-gray-100 flex items-center justify-center text-gray-400"><i class="fas fa-image"></i></div>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-gray-900 font-medium">{{ $article->title }}</td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex justify-center gap-2">
                                    <a href="{{ route('admin.articles.edit', $article) }}" class="w-8 h-8 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 hover:bg-blue-600 hover:text-white transition"><i class="fas fa-pen text-xs"></i></a>
                                    <form action="{{ route('admin.articles.destroy', $article) }}" method="POST" class="inline">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="w-8 h-8 rounded-full bg-red-50 flex items-center justify-center text-red-600 hover:bg-red-600 hover:text-white transition" onclick="return confirm('هل أنت متأكد؟')"><i class="fas fa-trash-alt text-xs"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center py-10 text-gray-500">لا توجد مقالات</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="mt-4">{{ $articles->links() }}</div>
        </div>
    </div>
</x-app-layout>
