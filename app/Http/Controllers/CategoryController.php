<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::orderBy('category_name', 'ASC')->get();
        return view('admin.category.index', compact('categories'));
    }

    public function create() {
        return view('admin.category.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'category_name' => 'required|unique:categories,category_name',
            'category_picture' => 'required|file|image|max:5120'
        ]);

        $upload = $request->file('category_picture')->store('upload/category');

        $validated['category_picture'] = $upload;
        $validated['category_slug'] = Str::slug($request->category_name);

        Category::create($validated);

        $notification = [
            'message' => 'Category Inserted Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('admin.category.index')->with($notification);
    }

    public function edit(Category $category) {
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, Category $category) {
        $request->validate([
            'category_name' => ['required', Rule::unique('categories')->ignore($category->id, 'id')],
            'category_picture' => 'file|image|max:5120'
        ]);

        if ($request->category_picture) {
            Storage::delete($category->category_picture);
            $category_picture = $request->file('category_picture')->store('upload/category');
        } else {
            $category_picture = $category->category_picture;
        }

        $update = $request->except(['_token', 'category_picture']);
        $update['category_slug'] = Str::slug($request->category_name);
        $update['category_picture'] = $category_picture;

        $category->update($update);

        $notification = [
            'message' => 'Category Updated Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('admin.category.index')->with($notification);
    }

    public function destroy(Category $category) {
        Storage::delete($category->category_picture);
        $category->delete();

        $notification = [
            'message' => 'Category Deleted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }
}
