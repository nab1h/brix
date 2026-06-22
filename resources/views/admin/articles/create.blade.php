<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight">{{ __('Add Article') }}</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            <link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet">

            @if ($errors->any())
            <div class="mb-6 bg-red-50 border border-red-200 text-red-700 rounded-lg p-4 text-sm">
                <p class="font-bold mb-2">يوجد خطأ في البيانات:</p>
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data" onsubmit="syncQuill()">
                @csrf

                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">عنوان المقال <span class="text-red-500">*</span></label>
                        <input type="text" name="title" value="{{ old('title') }}" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:outline-none focus:ring-1 focus:ring-[#6F8F7A] focus:border-[#6F8F7A] text-sm" required>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">صورة الغلاف</label>
                        <input type="file" name="image" accept="image/*" class="w-full border border-gray-300 rounded-lg px-4 py-2 bg-white text-sm file:mr-4 file:py-1 file:px-3 file:rounded-full file:border-0 file:text-sm file:bg-gray-100 file:text-[#6F8F7A]">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">محتوى المقال <span class="text-red-500">*</span></label>
                        <!-- الحاوية اللي هيتعرض فيها المحرر -->
                        <div id="editor" style="height: 300px;" class="border border-gray-300 rounded-b-lg bg-white"></div>
                        <!-- إنبوت مخفي عشان نحفظ الـ HTML اللي بيتكتب ونرسله مع الفورم -->
                        <input type="hidden" name="content" id="content-input" value="{{ old('content') }}">
                    </div>
                </div>

                <div class="mt-6 flex items-center gap-4">
                    <button type="submit" class="bg-[#6F8F7A] hover:bg-[#587061] text-white px-6 py-2.5 rounded-lg text-sm font-medium transition">حفظ المقال</button>
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

            var contentInput = document.getElementById('content-input');

            quill.on('text-change', function() {
                contentInput.value = quill.root.innerHTML;
            });

            function syncQuill() {
                contentInput.value = quill.root.innerHTML;
            }
        </script>
    </div>
    </div>
</x-app-layout>
