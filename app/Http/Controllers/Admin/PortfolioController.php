<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index(Request $request)
    {
        $query = Portfolio::with(['brand', 'category']);

        // بحث بالاسم
        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // فلترة حسب البراند
        if ($request->filled('brand_id')) {
            $query->where('brand_id', $request->brand_id);
        }

        // فلترة حسب القسم
        if ($request->filled('cat_id')) {
            $query->where('cat_id', $request->cat_id);
        }

        $portfolios = $query->latest()->paginate(10);
        $totalPortfolios = Portfolio::count();

        // جلب البراندات والأقسام لعرضهم في الفلاتر
        $brands = Brand::all();
        $categories = Category::all();

        return view('admin.portfolios.index', compact('portfolios', 'totalPortfolios', 'brands', 'categories'));
    }

    public function create()
    {
        $brands = Brand::all();
        $categories = Category::all();
        return view('admin.portfolios.create', compact('brands', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'brand_id'    => 'required|exists:brands,id',
            'cat_id'      => 'required|exists:categories,id',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'description' => 'nullable|string',
            'url'         => 'nullable|url',
            'status'      => 'required|boolean',
        ]);

        $data = $request->except('image');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('portfolios', 'public');
        }

        Portfolio::create($data);

        return redirect()->route('admin.portfolios.index')->with('status', 'تم إضافة المشروع بنجاح');
    }

    public function edit(Portfolio $portfolio)
    {
        $brands = Brand::all();
        $categories = Category::all();
        return view('admin.portfolios.edit', compact('portfolio', 'brands', 'categories'));
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'brand_id'    => 'required|exists:brands,id',
            'cat_id'      => 'required|exists:categories,id',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'description' => 'nullable|string',
            'url'         => 'nullable|url',
            'status'      => 'required|boolean',
        ]);

        $data = $request->except('image');

        if ($request->hasFile('image')) {
            if ($portfolio->image) {
                Storage::disk('public')->delete($portfolio->image);
            }
            $data['image'] = $request->file('image')->store('portfolios', 'public');
        }

        $portfolio->update($data);

        return redirect()->route('admin.portfolios.index')->with('status', 'تم تعديل المشروع بنجاح');
    }

    public function destroy(Portfolio $portfolio)
    {
        if ($portfolio->image) {
            Storage::disk('public')->delete($portfolio->image);
        }

        $portfolio->delete();

        return redirect()->route('admin.portfolios.index')->with('status', 'تم حذف المشروع بنجاح');
    }
}
