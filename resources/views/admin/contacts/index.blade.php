<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight">
            {{ __('Messages Management') }}
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
                    <h3 class="text-2xl font-bold text-gray-900">رسائل التواصل</h3>
                    <p class="text-gray-500 text-sm mt-1">قراءة وإدارة الرسائل الواردة من العملاء.</p>
                </div>

                <div class="flex gap-3 items-center">
                    <form action="{{ route('admin.contacts.index') }}" method="GET" class="flex gap-2 items-center">
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="بحث بالاسم أو الموضوع..."
                            class="bg-white border border-gray-300 text-gray-900 rounded-lg px-3 py-2.5 focus:outline-none focus:ring-1 focus:ring-[#E60914] focus:border-[#E60914] w-56 text-sm">

                        <select name="filter" onchange="this.form.submit()"
                            class="bg-white border border-gray-300 text-gray-900 rounded-lg px-3 py-2.5 focus:outline-none focus:ring-1 focus:ring-[#E60914] focus:border-[#E60914] cursor-pointer text-sm">
                            <option value="">الكل</option>
                            <option value="unread" {{ request('filter') == 'unread' ? 'selected' : '' }}>غير مقروءة</option>
                            <option value="read" {{ request('filter') == 'read' ? 'selected' : '' }}>مقروءة</option>
                        </select>
                    </form>
                </div>
            </div>

            <!-- Stats -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
                <div class="bg-white p-4 rounded-xl border border-gray-200 shadow-sm">
                    <p class="text-gray-500 text-xs">إجمالي الرسائل</p>
                    <h4 class="text-xl text-gray-900 font-bold mt-1">{{ $totalContacts }}</h4>
                </div>
                <div class="bg-white p-4 rounded-xl border border-gray-200 shadow-sm">
                    <p class="text-[#E60914] text-xs font-medium">رسائل غير مقروءة</p>
                    <h4 class="text-xl text-gray-900 font-bold mt-1">{{ $unreadContacts }}</h4>
                </div>
            </div>

            <!-- Table -->
            <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden shadow-sm">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-gray-700">
                        <thead class="bg-gray-50 text-gray-500 text-xs uppercase border-b border-gray-200">
                            <tr>
                                <th class="px-6 py-4 text-start">#ID</th>
                                <th class="px-6 py-4 text-start">الاسم</th>
                                <th class="px-6 py-4 text-start">البريد الإلكتروني</th>
                                <th class="px-6 py-4 text-start">الهاتف</th>
                                <th class="px-6 py-4 text-start">الموضوع</th>
                                <th class="px-6 py-4 text-start">الحالة</th>
                                <th class="px-6 py-4 text-center">إجراءات</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($contacts as $contact)
                            <tr class="border-b border-gray-100 hover:bg-gray-50/50 transition duration-200 {{ $contact->is_read ? '' : 'bg-blue-50/30 font-semibold' }}">
                                <td class="px-6 py-4 font-mono text-xs text-gray-400">#{{ $contact->id }}</td>

                                <td class="px-6 py-4 text-gray-900">
                                    {{ $contact->name }}
                                </td>

                                <td class="px-6 py-4 text-blue-500">
                                    <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
                                </td>

                                <td class="px-6 py-4 text-gray-600">
                                    {{ $contact->phone ?? '-' }}
                                </td>

                                <td class="px-6 py-4 text-gray-900">
                                    {{ $contact->subject }}
                                </td>

                                <td class="px-6 py-4">
                                    @if($contact->is_read == 0)
                                    <span class="bg-red-50 text-red-700 border border-red-200 px-3 py-1 text-xs rounded-full">جديد</span>
                                    @else
                                    <span class="bg-gray-50 text-gray-700 border border-gray-200 px-3 py-1 text-xs rounded-full">مقروء</span>
                                    @endif
                                </td>

                                <td class="px-6 py-4 text-center">
                                    <div class="flex justify-center gap-2 items-center flex-wrap">

                                        <!-- View Message (Using a simple details modal or collapse, here we just show mark as read) -->
                                        @if($contact->is_read == 0)
                                        <a href="{{ route('admin.contacts.read', $contact->id) }}" class="w-8 h-8 rounded-full bg-green-50 flex items-center justify-center text-green-600 hover:bg-green-600 hover:text-white transition" title="تعليم كمقروء">
                                            <i class="fas fa-check text-xs"></i>
                                        </a>
                                        @endif

                                        <!-- Delete -->
                                        <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="w-8 h-8 rounded-full bg-red-50 flex items-center justify-center text-red-600 hover:bg-red-600 hover:text-white transition"
                                                title="حذف"
                                                onclick="return confirm('هل أنت متأكد من حذف هذه الرسالة؟')">
                                                <i class="fas fa-trash-alt text-xs"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center py-10 text-gray-500">
                                    لا توجد رسائل حالياً
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="p-4 border-t border-gray-200 text-gray-600 text-sm flex justify-between items-center bg-gray-50/50">
                    <span>
                        عرض {{ $contacts->firstItem() ?? 0 }} إلى {{ $contacts->lastItem() ?? 0 }} من إجمالي {{ $contacts->total() }}
                    </span>
                    {{ $contacts->links() }}
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
