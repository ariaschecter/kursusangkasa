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
        $title = 'All Category';
        return view('admin.category.index', compact('categories', 'title'));
    }

    public function create() {
        $title = 'Add Category';
        return view('admin.category.create', compact('title'));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'category_name' => 'required|unique:categories,category_name',
            'category_picture' => 'required|file|image|max:5120'
        ]);

        $image = $request->file('category_picture');
        $category_picture = 'upload/course/' . time() . uniqid() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(800, 533)->save('storage/' . $category_picture);

        $validated['category_picture'] = $category_picture;
        $validated['category_slug'] = Str::slug($request->category_name);

        Category::create($validated);

        $notification = [
            'message' => 'Category Inserted Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('admin.category.index')->with($notification);
    }

    public function edit(Category $category) {
        $title = 'Edit Category';
        return view('admin.category.edit', compact('category', 'title'));
    }

    public function update(Request $request, Category $category) {
        $request->validate([
            'category_name' => ['required', Rule::unique('categories')->ignore($category->id, 'id')],
            'category_picture' => 'file|image|max:5120'
        ]);

        if ($request->category_picture) {
            Storage::delete($category->category_picture);
            $image = $request->file('category_picture');
            $category_picture = 'upload/course/' . time() . uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(800, 533)->save('storage/' . $category_picture);
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
