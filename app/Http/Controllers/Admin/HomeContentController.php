<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeContent;
use Illuminate\Http\Request;

class HomeContentController extends Controller
{

    public function index()
    {
        $content = HomeContent::firstOrCreate(['id' => 1]);

        return view('admin.home_contents.index', compact('content'));
    }


    public function update(Request $request, $id)
    {
        $content = HomeContent::findOrFail($id);

        $request->validate([
            'hero_title_ar' => 'nullable|string|max:255',
            'hero_subtitle_ar' => 'nullable|string|max:255',
            'about_title_ar' => 'nullable|string|max:255',
            'about_desc_ar' => 'nullable|string',
        ]);

        $content->update($request->only([
            'hero_title_ar',
            'hero_subtitle_ar',
            'about_title_ar',
            'about_desc_ar'
        ]));

        return redirect()->back()->with('status', 'تم تحديث محتوى الموقع بنجاح!');
    }
}
