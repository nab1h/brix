<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Notifications\NewTestimonialNotification;
use Illuminate\Support\Facades\Notification;


class TestimonialController extends Controller
{

    public function index()
    {
        $testimonials = Testimonial::latest()->get();
        return view('admin.testimonials.index', compact('testimonials'));
    }


    /**
     * حفظ الرأي الجديد في قاعدة البيانات
     */
    public function store(Request $request)
    {
        // التحقق من البيانات
        $validator = Validator::make($request->all(), [
            'name'    => 'required|string|max:255',
            'role'    => 'nullable|string|max:255',
            'message' => 'required|string',
            'job'  => 'required|string|max:255',
        ]);

        // إذا فشل التحقق
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }


        $testimonial = Testimonial::create([
            'name'       => $request->name,
            'role'       => $request->role,
            'message'    => $request->message,
            'job'     => $request->job,
            'is_active'  => false,
        ]);

        Notification::route('mail', env('MAIL_OWNER'))
            ->notify(new NewTestimonialNotification($testimonial));

        // إرجاع استجابة نجاح JSON
        return response()->json([
            'success' => true,
            'message' => 'تم الإرسال بنجاح'
        ]);
    }

    /**
     * عرض صفحة تعديل رأي معين
     */
    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    /**
     * تحديث بيانات الرأي
     */
    public function update(Request $request, $id)
    {
        $testimonial = Testimonial::findOrFail($id);

        $request->validate([
            'name'    => 'required|string|max:255',
            'role'    => 'nullable|string|max:255',
            'message' => 'required|string',
            'job'  => 'required|string|max:255',
            'is_active' => 'nullable|boolean',
        ]);

        $testimonial->update([
            'name'       => $request->name,
            'role'       => $request->role,
            'message'    => $request->message,
            'job'     => $request->job,
            'is_active'  => $request->has('is_active'),
        ]);

        return redirect()->route('admin.testimonials.index')->with('status', 'تم تحديث الرأي بنجاح');
    }

    /**
     * تغيير حالة الرأي (تفعيل / تعطيل) - تستخدم في الجدول مباشرة
     */
    public function updateStatus($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->is_active = !$testimonial->is_active;
        $testimonial->save();

        return redirect()->back()->with('status', 'تم تغيير حالة الرأي بنجاح');
    }

    /**
     * حذف الرأي
     */
    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();

        return redirect()->back()->with('status', 'تم حذف الرأي بنجاح');
    }
}
