<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight">{{ __('Edit Article') }}</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet">
            <div class="bg-white border border-gray-200 rounded-2xl shadow-sm p-6">
                <form action="{{ route('admin.articles.update', $article) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="space-y-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">عنوان المقال <span class="text-red-500">*</span></label>
                            <input type="text" name="title" value="{{ old('title', $article->title) }}" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:outline-none focus:ring-1 focus:ring-[#E60914] focus:border-[#E60914] text-sm" required>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">صورة الغلاف</label>
                            @if($article->image)
                            <img src="{{ Storage::url($article->image) }}" class="w-20 h-20 rounded-lg object-cover mb-2">
                            @endif
                            <input type="file" name="image" accept="image/*" class="w-full border border-gray-300 rounded-lg px-4 py-2 bg-white text-sm file:mr-4 file:py-1 file:px-3 file:rounded-full file:border-0 file:text-sm file:bg-red-50 file:text-[#E60914]">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">محتوى المقال <span class="text-red-500">*</span></label>
                            <div id="editor" style="height: 300px;" class="border border-gray-300 rounded-b-lg bg-white"></div>
                            <input type="hidden" name="content" id="content-input" value="{{ old('content', $article->content) }}">
                        </div>
                    </div>

                    <div class="mt-6 flex items-center gap-4">
                        <button type="submit" class="bg-[#E60914] hover:bg-red-700 text-white px-6 py-2.5 rounded-lg text-sm font-medium transition">تحديث المقال</button>
                        <a href="{{ route('admin.articles.index') }}" class="text-gray-500 hover:text-gray-700 text-sm font-medium transition">إلغاء</a>
                    </div>
                </form>
            </div>

            <script src="https://cdn.quilljs.com/1.3.7/quill.min.js"></script>
            <script>
                var quill = new Quill('#editor', {
                    theme: 'snow',
                    placeholder: 'اكتب محتوى المقال هنا...',
                });

                var existingContent = document.getElementById('content-input').value;
                if (existingContent) {
                    quill.root.innerHTML = existingContent;
                }

                var form = document.querySelector('form');
                form.addEventListener('submit', function(e) {
                    document.getElementById('content-input').value = quill.root.innerHTML;
                });
            </script>
        </div>
    </div>
</x-app-layout>
