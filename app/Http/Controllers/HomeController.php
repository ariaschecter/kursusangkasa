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
        $courses = Course::with('category', 'teacher.user')->orderBy('course_name', 'ASC')->paginate(9);
        return view('frontend.course.index', compact('courses'));
    }

    public function course_show(Course $course) {
        $course = Course::with('teacher', 'category')->findOrFail($course->id);
        $relateds = Course::where('category_id', $course->category_id)->where('id', '!=', $course->id)->limit(5)->get();
        return view('frontend.course.show', compact('course', 'relateds'));
    }

    public function category_index() {
        $categories = Category::orderBy('category_name', 'ASC')->paginate(6);
        return view('frontend.category.index', compact('categories'));
    }

    public function category_show(Category $category) {
        $courses = Course::with('teacher.user')->where('category_id', $category->id)->orderBy('course_name', 'ASC')->paginate(9);
        return view('frontend.category.show', compact('category', 'courses'));
    }

    public function teacher_index() {
        $teachers = Teacher::with('user')->get();
        return view('frontend.course.index', compact('teachers'));
    }
}
