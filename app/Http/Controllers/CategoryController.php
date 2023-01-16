<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::orderBy('category_name', 'ASC')->get();
        return view('admin.category.index', compact('categories'));
    }

    public function addData() {
        for($i = 0; $i < 50; $i++) {
            Category::create([
                'category_name' => 'Arlana',
                'category_slug' => 'arlana',
                'category_picture' => 'adadwad'
            ]);
        }
    }
}
