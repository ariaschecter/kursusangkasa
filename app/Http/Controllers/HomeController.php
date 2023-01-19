<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Setting;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $setting = Setting::first();
        $categories = Category::all();
        $popular = Course::with('teacher', 'category')->orderBy('course_enroll')->limit(6)->get();
        $latest_course = Course::with('teacher', 'category')->orderBy('created_at', 'DESC')->limit(3)->get();
        return view('frontend.index', compact('setting', 'categories', 'popular', 'latest_course'));
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

    public function teacher_show(User $user) {
        $teacher = Teacher::with('user', 'course')->findOrFail($user->id);
        return view('frontend.teacher.show', compact('teacher'));
    }
}
