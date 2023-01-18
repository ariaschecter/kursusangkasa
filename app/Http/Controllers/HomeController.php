<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Setting;
use App\Models\Teacher;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $setting = Setting::first();
        return view('frontend.index', compact('setting'));
    }

    public function course_index() {
        $courses = Course::with('category', 'teacher.user')->orderBy('course_name', 'ASC')->get();
        return view('frontend.course.index', compact('courses'));
    }

    public function category_index() {
        $categories = Category::orderBy('category_name', 'ASC')->get();
        return view('frontend.course.index', compact('categories'));
    }

    public function teacher_index() {
        $teachers = Teacher::with('user')->get();
        return view('frontend.course.index', compact('teachers'));
    }
}
