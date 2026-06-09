<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index(Request $request)
    {
        $query = Career::query();

        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%')
                ->orWhere('depart', 'like', '%' . $request->search . '%');
        }

        $careers = $query->latest()->paginate(10);
        $totalCareers = Career::count();

        return view('admin.careers.index', compact('careers', 'totalCareers'));
    }

    public function create()
    {
        return view('admin.careers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'depart'      => 'required|string|max:255',
            'description' => 'nullable|string',
            'location'    => 'nullable|string|max:255',
            'experience'  => 'nullable|string|max:255',
        ]);

        Career::create($request->all());

        return redirect()->route('admin.careers.index')->with('status', 'تم إضافة الوظيفة بنجاح');
    }

    public function edit(Career $career)
    {
        return view('admin.careers.edit', compact('career'));
    }

    public function update(Request $request, Career $career)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'depart'      => 'required|string|max:255',
            'description' => 'nullable|string',
            'location'    => 'nullable|string|max:255',
            'experience'  => 'nullable|string|max:255',
        ]);

        $career->update($request->all());

        return redirect()->route('admin.careers.index')->with('status', 'تم تعديل الوظيفة بنجاح');
    }

    public function destroy(Career $career)
    {
        $career->delete();
        return redirect()->route('admin.careers.index')->with('status', 'تم حذف الوظيفة بنجاح');
    }
}
