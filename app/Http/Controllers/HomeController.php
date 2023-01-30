<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Course;
use App\Models\ListCourse;
use App\Models\Review;
use App\Models\Setting;
use App\Models\SubCourse;
use App\Models\Teacher;
use App\Models\User;
use App\Models\Youtube;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $setting = Setting::first();
        $categories = Category::all();
        $popular = Course::with('teacher', 'category')->where('course_status', 'ACTIVE')->orderBy('course_enroll')->limit(6)->get();
        $latest_course = Course::with('teacher', 'category')->where('course_status', 'ACTIVE')->orderBy('created_at', 'DESC')->limit(3)->get();
        $reviews = Review::latest()->limit(6)->get();
        $youtubes = Youtube::latest()->limit(3)->get();
        return view('frontend.index', compact('setting', 'categories', 'popular', 'latest_course', 'reviews', 'youtubes'));
    }

    public function course_index() {
        $courses = Course::with('category', 'teacher.user')->where('course_status', 'ACTIVE')->orderBy('course_name', 'ASC')->paginate(9);
        return view('frontend.course.index', compact('courses'));
    }

    public function course_show(Course $course) {
        $course = Course::with('teacher', 'category', 'sub_course.list_course')->where('course_status', 'ACTIVE')->findOrFail($course->id);
        $sub_course = SubCourse::where('course_id', $course->id)->orderBy('sub_course_no', 'ASC')->first();
        $list_course = ListCourse::where('sub_course_id', $sub_course->id)->first();
        $relateds = Course::where('category_id', $course->category_id)->where('id', '!=', $course->id)->limit(5)->get();
        return view('frontend.course.show', compact('course', 'relateds', 'list_course'));
    }

    public function category_index() {
        $categories = Category::orderBy('category_name', 'ASC')->paginate(6);
        return view('frontend.category.index', compact('categories'));
    }

    public function category_show(Category $category) {
        $courses = Course::with('teacher.user')->where('category_id', $category->id)->where('course_status', 'ACTIVE')->orderBy('course_name', 'ASC')->paginate(9);
        return view('frontend.category.show', compact('category', 'courses'));
    }

    public function teacher_show(User $user) {
        $teacher = Teacher::with('user', 'course')->findOrFail($user->id);
        return view('frontend.teacher.show', compact('teacher'));
    }

    public function contact_index() {
        return view('frontend.contact.index');
    }

    public function contact_store(Request $request) {
        $validated = $request->validate([
            'contact_name' => 'required',
            'contact_email' => 'required',
            'contact_subject' => 'required',
            'contact_message' => 'required',
        ]);

        Contact::create($validated);

        $notification = [
            'message' => 'Your Message Delivered Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }
}
