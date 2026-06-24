<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Mail\ReservationMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;
use Illuminate\Validation\Rule;

class ReservationController extends Controller
{
    // =========================
    // Reservations Index
    // =========================
    public function index(Request $request)
    {
        $query = Reservation::where('is_archive', 0);

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $totalArchived = Reservation::where('is_archive', 1)->count();

        if ($request->filled('search_id')) {
            $query->where('id', $request->search_id);
        }

        $reservations = $query->latest()->paginate(10);

        $totalReservations = Reservation::count();
        $pending = Reservation::where('status', 'pending')->count();
        $confirmed = Reservation::where('status', 'confirmed')->count();
        $completed = Reservation::where('status', 'completed')->count();
        $archive = Reservation::where('is_archive', true)->count();

        return view('admin.reservations.index', compact(
            'reservations',
            'totalReservations',
            'pending',
            'confirmed',
            'completed',
            'totalArchived',
            'archive'
        ));
    }


    public function confirmStatus($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->update(['status' => 'confirmed']);

        return redirect()->back()->with('status', 'تم تأكيد الحجز بنجاح!');
    }

    public function completeStatus($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->update(['status' => 'completed']);

        return redirect()->back()->with('status', 'تم تسجيل الحجز كمكتمل (تم الحضور)!');
    }



    // =========================
    // Create
    // =========================
    public function create()
    {
        return view('admin.reservations.create');
    }

    // =========================
    // Store
    // =========================
    public function store(Request $request)
    {
        $request->validate(['category_id' => 'required|exists:categories,id']);
        $category = Category::with('specifications')->findOrFail($request->input('category_id'));

        $rules = [
            'name'     => 'required|string|max:255',
            'phone'    => 'required|string|max:20',
            'email'    => 'required|email|max:255',
            'brand'    => 'nullable|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'specifications' => 'nullable|array',
            'brand_logo'     => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
            'notes'    => 'nullable|string',
        ];

        $attributes = [];
        foreach ($category->specifications as $field) {
            $fieldRules = [$field->is_required ? 'required' : 'nullable'];
            $fieldRules[] = $field->type === 'number' ? 'numeric' : 'string';
            if ($field->type === 'number') {
                $fieldRules[] = 'max:999999999';
            } else {
                $fieldRules[] = 'max:5000';
            }
            if ($field->type === 'select') {
                $fieldRules[] = Rule::in($field->options ?? []);
            }
            $rules['specifications.' . $field->id] = $fieldRules;
            $attributes['specifications.' . $field->id] = $field->label;
        }

        $validated = $request->validate($rules, [], $attributes);
        $answers = $validated['specifications'] ?? [];
        $validated['category'] = $category->name;
        $validated['specifications'] = $category->specifications
            ->filter(fn ($field) => array_key_exists((string) $field->id, $answers) && $answers[$field->id] !== null && $answers[$field->id] !== '')
            ->map(fn ($field) => [
                'field_id' => $field->id,
                'label' => $field->label,
                'value' => $answers[$field->id],
                'unit' => $field->unit,
            ])->values()->all();

        if ($request->hasFile('brand_logo')) {
            $validated['brand_logo'] = $request->file('brand_logo')->store('reservation-logos', 'public');
        }

        $validated['status'] = 'pending';
        $validated['is_archive'] = 0;
        $validated['is_delete'] = 0;

        $reservation = Reservation::create($validated);

        // إرسال الإيميل
        $ownerEmail = config('mail.MAIL_OWNER', 'avora.fun.eg@gmail.com');
        Mail::to($ownerEmail)->send(new ReservationMail($reservation));

        $message = 'تم إرسال طلب عرض السعر بنجاح!';

        if ($request->expectsJson()) {
            return response()->json([
                'success' => true,
                'message' => $message,
            ]);
        }

        return redirect()->back()->with('status', $message);
    }

    // =========================
    // Edit
    // =========================
    public function edit($id)
    {
        $reservation = Reservation::findOrFail($id);

        return view('admin.reservations.edit', compact('reservation'));
    }

    // =========================
    // Update
    // =========================
    public function update(Request $request, $id)
    {
        $reservation = Reservation::findOrFail($id);

        $validated = $request->validate([
            'name'              => 'required|string|max:255',
            'phone'             => 'required|string|max:20',
            'email'             => 'nullable|email|max:255',      // <-- تم الإضافة
            'brand'             => 'nullable|string|max:255',     // <-- تم الإضافة
            'category'          => 'nullable|string|max:255',     // <-- تم الإضافة
            'product_length'    => 'nullable|numeric|min:0.1|max:99999',
            'product_width'     => 'nullable|numeric|min:0.1|max:99999',
            'product_height'    => 'nullable|numeric|min:0.1|max:99999',
            'paper_weight'      => 'nullable|integer|in:300,320,350,400',
            'material'          => 'nullable|string|in:بريستول,كوشيه,فنلندي الشجرة',
            'quantity'          => 'nullable|integer|min:1000|max:100000000',
            'brand_logo'        => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
            'status'            => 'required|in:pending,confirmed,cancelled,completed',
            'notes'             => 'nullable|string',
        ]);

        if ($request->hasFile('brand_logo')) {
            if ($reservation->brand_logo) {
                Storage::disk('public')->delete($reservation->brand_logo);
            }
            $validated['brand_logo'] = $request->file('brand_logo')->store('reservation-logos', 'public');
        }

        $reservation->update($validated);


        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'تم إرسال الطلب بنجاح ✨'
            ]);
        }

        return back()->with('status', 'تم إرسال الطلب بنجاح');
    }

    // =========================
    // Delete
    // =========================
    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);
        if ($reservation->brand_logo) {
            Storage::disk('public')->delete($reservation->brand_logo);
        }
        $reservation->delete();
        return redirect()
            ->back()
            ->with('status', 'تم حذف الحجز نهائيًا!');
    }
    // =========================
    // Archive
    // =========================
    public function archive(Request $request)
    {
        $query = Reservation::where('is_archive', 1);

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        if ($request->filled('search_id')) {
            $query->where('id', $request->search_id);
        }

        $reservations = $query->latest()->paginate(10);

        $totalArchived = Reservation::where('is_archive', 1)->count();

        return view('admin.reservations.archive', compact('reservations', 'totalArchived'));
    }

    public function moveToArchive($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->update(['is_archive' => 1]);

        return redirect()->route('reservations.index')->with('status', 'تم أرشفة الحجز بنجاح!');
    }


    // =========================
    // Archived
    // =========================
    public function archived()
    {
        $reservations = Reservation::where('is_archive', 1)
            ->where('is_delete', 0)
            ->latest()
            ->paginate(10);

        return view('reservations.archived', compact('reservations'));
    }

    public function restore($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->update(['is_archive' => 0]);

        return redirect()->route('reservations.archive')->with('status', 'تم استعادة الحجز بنجاح!');
    }
}
