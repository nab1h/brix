<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight">
            {{ __('Reservations Management') }}
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
                    <h3 class="text-2xl font-bold text-gray-900">سجل الحجوزات</h3>
                    <p class="text-gray-500 text-sm mt-1">إدارة حجوزات المطعم بسهولة.</p>
                </div>

                <div class="flex gap-3">
                    <!-- Filter Dropdown -->
                    <form action="{{ route('reservations.index') }}" method="GET" class="flex">

                        <div class="relative group mx-5">
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                <i class="fas fa-search text-gray-400 group-focus-within:text-[#6F8F7A] transition"></i>
                            </div>
                            <input type="number"
                                name="search_id"
                                value="{{ request('search_id') }}"
                                placeholder="بحث برقم ID"
                                class="bg-white border border-gray-300 text-gray-900 rounded-lg pl-3 pr-10 py-2.5 focus:outline-none focus:ring-1 focus:ring-[#6F8F7A] focus:border-[#6F8F7A] w-40 transition text-sm placeholder-gray-400">
                        </div>
                        <select name="status" onchange="this.form.submit()"
                            class="bg-white border border-gray-300 text-gray-900 rounded-lg px-4 py-2.5 focus:outline-none focus:ring-1 focus:ring-[#6F8F7A] focus:border-[#6F8F7A] cursor-pointer text-sm">
                            <option value="">الكل (All)</option>
                            <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>قيد الانتظار</option>
                            <option value="confirmed" {{ request('status') == 'confirmed' ? 'selected' : '' }}>مؤكد</option>
                            <option value="completed" {{ request('status') == 'completed' ? 'selected' : '' }}>مكتمل</option>
                            <option value="cancelled" {{ request('status') == 'cancelled' ? 'selected' : '' }}>ملغي</option>
                        </select>
                    </form>
                </div>
            </div>

            <!-- Stats -->
            <div class="grid grid-cols-2 md:grid-cols-5 gap-4 mb-8">
                <div class="bg-white p-4 rounded-xl border border-gray-200 shadow-sm">
                    <p class="text-gray-500 text-xs">إجمالي الحجوزات</p>
                    <h4 class="text-xl text-gray-900 font-bold mt-1">{{ $totalReservations }}</h4>
                </div>
                <div class="bg-white p-4 rounded-xl border border-gray-200 shadow-sm">
                    <p class="text-yellow-600 text-xs font-medium">قيد الانتظار</p>
                    <h4 class="text-xl text-gray-900 font-bold mt-1">{{ $pending }}</h4>
                </div>
                <div class="bg-white p-4 rounded-xl border border-gray-200 shadow-sm">
                    <p class="text-blue-600 text-xs font-medium">مؤكد</p>
                    <h4 class="text-xl text-gray-900 font-bold mt-1">{{ $confirmed }}</h4>
                </div>
                <div class="bg-white p-4 rounded-xl border border-gray-200 shadow-sm">
                    <p class="text-green-600 text-xs font-medium">مكتمل</p>
                    <h4 class="text-xl text-gray-900 font-bold mt-1">{{ $completed }}</h4>
                </div>

                <a href="{{ route('reservations.archive') }}" class="hover:bg-gray-50 transition">
                    <div class="bg-white p-4 rounded-xl border border-gray-200 shadow-sm h-full">
                        <p class="text-indigo-600 text-xs font-medium">ارشيف</p>
                        <h4 class="text-xl text-gray-900 font-bold mt-1">{{ $archive }}</h4>
                    </div>
                </a>
            </div>

            <!-- Table -->
            <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden shadow-sm">

                <!-- Optional: Show active filter message -->
                @if(request()->has('status') && request('status') != '')
                <div class="bg-gray-50 px-6 py-3 border-b border-gray-200 flex justify-between items-center text-sm">
                    <span class="text-gray-600">
                        جاري عرض الحجوزات ذات الحالة: <span class="text-gray-900 font-bold uppercase">{{ request('status') }}</span>
                    </span>
                    <a href="{{ route('reservations.index') }}" class="text-[#6F8F7A] hover:underline font-medium">
                        إزالة الفلتر
                    </a>
                </div>
                @endif

                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-gray-700">
                        <thead class="bg-gray-50 text-gray-500 text-xs uppercase border-b border-gray-200">
                            <tr>
                                <th class="px-6 py-4 text-start">#ID</th>
                                <th class="px-6 py-4 text-start">بيانات العميل</th>
                                <th class="px-6 py-4 text-start">القسم</th>
                                <th class="px-6 py-4 text-start">المواصفات</th>
                                <th class="px-6 py-4 text-start">اللوجو</th>
                                <th class="px-6 py-4 text-start">الحالة</th>
                                <th class="px-6 py-4 text-center">إجراءات</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($reservations as $reservation)
                            <tr class="border-b border-gray-100 hover:bg-gray-50/50 transition duration-200">

                                <td class="px-6 py-4 font-mono text-xs text-gray-400">#{{ $reservation->id }}</td>

                                <td class="px-6 py-4 min-w-[240px]">
                                    <div class="space-y-2">
                                        <div class="font-semibold text-gray-900">{{ $reservation->name }}</div>
                                        <div class="flex items-center gap-2 text-xs text-gray-600" dir="ltr">
                                            <i class="fas fa-phone text-gray-400"></i>
                                            <span>{{ $reservation->phone }}</span>
                                        </div>
                                        <div class="flex items-center gap-2 text-xs text-gray-600">
                                            <i class="fas fa-envelope text-gray-400"></i>
                                            <span>{{ $reservation->email ?? '-' }}</span>
                                        </div>
                                        @if($reservation->brand)
                                        <span class="inline-flex bg-gray-100 text-gray-700 border border-gray-200 px-2 py-1 rounded-lg text-xs">
                                            {{ $reservation->brand }}
                                        </span>
                                        @endif
                                    </div>
                                </td>

                                <!-- عمود الكاتجوري -->
                                <td class="px-6 py-4">
                                    @if($reservation->category)
                                    <span class="bg-purple-50 text-purple-700 border border-purple-200 px-2 py-0.5 rounded-full text-xs">
                                        {{ $reservation->category }}
                                    </span>
                                    @else
                                    <span class="text-gray-400 text-xs">-</span>
                                    @endif
                                </td>

                                <td class="px-6 py-4 text-xs text-gray-600 whitespace-nowrap leading-6">
                                    <span class="block">{{ $reservation->product_length }} × {{ $reservation->product_width }} × {{ $reservation->product_height }} سم</span>
                                    <span class="block">{{ $reservation->paper_weight }} جرام — {{ $reservation->material }}</span>
                                    <span class="block font-semibold text-gray-800">{{ number_format($reservation->quantity ?? 0) }} قطعة</span>
                                </td>

                                <td class="px-6 py-4">
                                    @if($reservation->brand_logo)
                                    <a href="{{ Storage::url($reservation->brand_logo) }}" target="_blank" class="block w-12 h-12 rounded-lg overflow-hidden border border-gray-200 bg-white">
                                        <img src="{{ Storage::url($reservation->brand_logo) }}" alt="لوجو {{ $reservation->brand }}" class="w-full h-full object-contain">
                                    </a>
                                    @else
                                    <span class="text-gray-400 text-xs">-</span>
                                    @endif
                                </td>

                                <td class="px-6 py-4">
                                    @php
                                    $statusClasses = [
                                    'pending' => 'bg-yellow-50 text-yellow-700 border border-yellow-200',
                                    'confirmed' => 'bg-blue-50 text-blue-700 border border-blue-200',
                                    'cancelled' => 'bg-red-50 text-red-700 border border-red-200',
                                    'completed' => 'bg-green-50 text-green-700 border border-green-200',
                                    ];
                                    @endphp

                                    <span class="px-3 py-1 text-xs rounded-full {{ $statusClasses[$reservation->status] ?? 'bg-gray-50 text-gray-700 border border-gray-200' }}">
                                        {{ $reservation->status }}
                                    </span>
                                </td>

                                <td class="px-6 py-4 text-center">
                                    <div class="flex justify-center gap-2 items-center flex-wrap">

                                        @if($reservation->status == 'pending')
                                        <form action="{{ route('reservations.confirm', $reservation->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="w-8 h-8 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 hover:bg-blue-600 hover:text-white transition" title="تأكيد الحجز">
                                                <i class="fas fa-check text-xs"></i>
                                            </button>
                                        </form>
                                        @endif

                                        @if($reservation->status == 'confirmed')
                                        <form action="{{ route('reservations.complete', $reservation->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="w-8 h-8 rounded-full bg-green-50 flex items-center justify-center text-green-600 hover:bg-green-600 hover:text-white transition" title="تم الحضور / مكتمل">
                                                <i class="fas fa-check-double text-xs"></i>
                                            </button>
                                        </form>
                                        @endif


                                        <!-- Archive -->
                                        <form action="{{ route('reservations.moveToArchive', $reservation->id) }}" method="POST" class="inline">
                                            @csrf
                                            <button class="w-8 h-8 rounded-full bg-yellow-50 flex items-center justify-center text-yellow-600 hover:bg-yellow-500 hover:text-white transition" title="أرشفة">
                                                <i class="fas fa-archive text-xs"></i>
                                            </button>
                                        </form>

                                        <!-- Delete -->
                                        <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="w-8 h-8 rounded-full bg-red-50 flex items-center justify-center text-red-600 hover:bg-red-600 hover:text-white transition"
                                                title="حذف"
                                                onclick="return confirm('هل أنت متأكد من حذف هذا الحجز؟')">
                                                <i class="fas fa-trash-alt text-xs"></i>
                                            </button>
                                        </form>

                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center py-10 text-gray-500">
                                    لا توجد حجوزات بهذه الحالة
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="p-4 border-t border-gray-200 text-gray-600 text-sm flex justify-between items-center bg-gray-50/50">
                    <span>
                        عرض {{ $reservations->firstItem() ?? 0 }} إلى {{ $reservations->lastItem() ?? 0 }} من إجمالي {{ $reservations->total() }}
                    </span>
                    {{ $reservations->links() }}
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
