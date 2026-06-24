<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CategorySpecification;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CategorySpecificationController extends Controller
{
    public function index(Category $category)
    {
        $category->load('specifications');
        return view('admin.category-specifications.index', compact('category'));
    }

    public function create(Category $category)
    {
        return view('admin.category-specifications.create', compact('category'));
    }

    public function store(Request $request, Category $category)
    {
        $category->specifications()->create($this->validated($request));
        return redirect()->route('admin.categories.specifications.index', $category)
            ->with('status', 'تمت إضافة حقل المواصفة بنجاح.');
    }

    public function edit(CategorySpecification $specification)
    {
        return view('admin.category-specifications.edit', compact('specification'));
    }

    public function update(Request $request, CategorySpecification $specification)
    {
        $specification->update($this->validated($request));
        return redirect()->route('admin.categories.specifications.index', $specification->category_id)
            ->with('status', 'تم تعديل حقل المواصفة بنجاح.');
    }

    public function destroy(CategorySpecification $specification)
    {
        $categoryId = $specification->category_id;
        $specification->delete();
        return redirect()->route('admin.categories.specifications.index', $categoryId)
            ->with('status', 'تم حذف حقل المواصفة.');
    }

    private function validated(Request $request): array
    {
        $data = $request->validate([
            'label' => ['required', 'string', 'max:255'],
            'type' => ['required', Rule::in(['text', 'number', 'select', 'textarea'])],
            'unit' => ['nullable', 'string', 'max:50'],
            'placeholder' => ['nullable', 'string', 'max:255'],
            'options_text' => ['nullable', 'string', 'required_if:type,select'],
            'is_required' => ['nullable', 'boolean'],
            'sort_order' => ['nullable', 'integer', 'min:0', 'max:9999'],
        ]);

        $data['is_required'] = $request->boolean('is_required');
        $data['sort_order'] = $data['sort_order'] ?? 0;
        $data['options'] = $data['type'] === 'select'
            ? collect(preg_split('/\r\n|\r|\n/', $data['options_text'] ?? ''))->map(fn ($v) => trim($v))->filter()->values()->all()
            : null;
        unset($data['options_text']);

        return $data;
    }
}
