<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Mail\ReservationMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

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
        $validated = $request->validate([
            'name'     => 'required|string|max:255',
            'phone'    => 'required|string|max:20',
            'email'    => 'nullable|email|max:255',
            'brand'    => 'nullable|string|max:255',
            'category' => 'nullable|string|max:255',
            'product_length' => 'required|numeric|min:0.1|max:99999',
            'product_width'  => 'required|numeric|min:0.1|max:99999',
            'product_height' => 'required|numeric|min:0.1|max:99999',
            'paper_weight'   => 'required|integer|in:300,320,350,400',
            'material'       => 'required|string|in:بريستول,كوشيه,فنلندي الشجرة',
            'quantity'       => 'required|integer|min:1000|max:100000000',
            'brand_logo'     => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
            'notes'    => 'nullable|string',
        ]);

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

        return response()->json([
            'success' => true,
            'message' => 'تم إضافة الحجز بنجاح!'
        ]);
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
