<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Setting;
use App\Models\SubCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class CourseController extends Controller
{
    public function index() {
        $courses = Course::orderBy('course_status', 'DESC')->get();
        return view('admin.course.index', compact('courses'));
    }

    public function show(Course $course) {
        $course = Course::with('sub_course.list_course')->findOrFail($course->id);
        return view('admin.course.show', compact('course'));
    }

    public function create() {
        $categories = Category::orderBy('category_name', 'ASC')->get();
        return view('admin.course.create', compact('categories'));
    }

    public function store(Request $request) {
        $setting = Setting::first();
        $validated = $request->validate([
            'category_id' => 'required|integer',
            'course_name' => 'required|unique:courses,course_name',
            'course_picture' => 'required|file|image|max:5120',
            'course_desc' => 'required',
            'price_old' => 'required|integer',
            'price_new' => 'required|integer',
        ]);

        $upload = $request->file('course_picture')->store('upload/course');
        $validated['teacher_id'] = Auth::id();
        $validated['course_slug'] = Str::slug($request->course_name);
        $validated['course_picture'] = $upload;
        $validated['admin_percentage'] = $setting->presentase_admin;
        $validated['teacher_percentage'] = $setting->presentase_teacher;
        $validated['affiliate_percentage'] = $setting->presentase_affiliate;
        $validated['course_subscribe'] = $request->course_subscribe;



        Course::create($validated);

        $notification = [
            'message' => 'Category Inserted Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('admin.course.index')->with($notification);
    }

    public function edit(Course $course) {
        $categories = Category::orderBy('category_name', 'ASC')->get();
        return view('admin.course.edit', compact('course', 'categories'));
    }

    public function update(Request $request, Course $course) {
        $request->validate([
            'category_id' => 'required|integer',
            'course_name' => ['required', Rule::unique('courses')->ignore($course->id, 'id')],
            'price_old' => 'required|integer',
            'price_new' => 'required|integer',
            'admin_percentage' => 'required|integer',
            'teacher_percentage' => 'required|integer',
            'affiliate_percentage' => 'required|integer',
            'course_status' => 'required',
            'course_picture' => 'file|image|max:5120',
            'course_desc' => 'required',
        ]);

        $validated = $request->except('_token');

        if ($request->course_picture) {
            Storage::delete($course->course_picture);
            $course_picture = $request->file('course_picture')->store('upload/course');
        } else {
            $course_picture = $course->course_picture;
        }

        $validated = $request->except(['_token', 'course_picture']);
        $validated['course_slug'] = Str::slug($request->course_name);
        $validated['course_picture'] = $course_picture;

        $course->update($validated);

        $notification = [
            'message' => 'Course Updated Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('admin.course.index')->with($notification);
    }

    public function destroy(Course $course) {
        Storage::delete($course->course_picture);
        $course->delete();

        $notification = [
            'message' => 'Course Deleted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }

    public function teacher_index() {
        $courses = Course::orderBy('created_at', 'DESC')->where('teacher_id', Auth::id())->get();
        return view('teacher.course.index', compact('courses'));
    }

    public function teacher_show(Course $course) {
        $course = Course::with('sub_course.list_course')->where('teacher_id', Auth::id())->findOrFail($course->id);
        return view('teacher.course.show', compact('course'));
    }

    public function teacher_create() {
        $categories = Category::orderBy('category_name', 'ASC')->get();
        return view('teacher.course.create', compact('categories'));
    }

    public function teacher_store(Request $request) {
        $setting = Setting::first();
        $validated = $request->validate([
            'category_id' => 'required|integer',
            'course_name' => 'required|unique:courses,course_name',
            'course_picture' => 'required|file|image|max:5120',
            'course_desc' => 'required',
            'price_old' => 'required|integer',
            'price_new' => 'required|integer',
        ]);

        $upload = $request->file('course_picture')->store('upload/course');
        $validated['teacher_id'] = Auth::id();
        $validated['course_slug'] = Str::slug($request->course_name);
        $validated['course_picture'] = $upload;
        $validated['admin_percentage'] = $setting->presentase_admin;
        $validated['teacher_percentage'] = $setting->presentase_teacher;
        $validated['affiliate_percentage'] = $setting->presentase_affiliate;
        $validated['course_subscribe'] = $request->course_subscribe;



        Course::create($validated);

        $notification = [
            'message' => 'Category Inserted Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('teacher.course.index')->with($notification);
    }

    public function teacher_edit(Course $course) {
        $categories = Category::orderBy('category_name', 'ASC')->get();
        return view('teacher.course.edit', compact('course', 'categories'));
    }

    public function teacher_update(Request $request, Course $course) {
        $request->validate([
            'category_id' => 'required|integer',
            'course_name' => ['required', Rule::unique('courses')->ignore($course->id, 'id')],
            'price_old' => 'required|integer',
            'price_new' => 'required|integer',
            'course_status' => 'required',
            'course_picture' => 'file|image|max:5120',
            'course_desc' => 'required',
        ]);

        $validated = $request->except('_token');

        if ($request->course_picture) {
            Storage::delete($course->course_picture);
            $course_picture = $request->file('course_picture')->store('upload/course');
        } else {
            $course_picture = $course->course_picture;
        }

        $validated = $request->except(['_token', 'course_picture']);
        $validated['course_slug'] = Str::slug($request->course_name);
        $validated['course_picture'] = $course_picture;

        $course->update($validated);

        $notification = [
            'message' => 'Course Updated Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('teacher.course.index')->with($notification);
    }

    public function teacher_destroy(Course $course) {
        Storage::delete($course->course_picture);
        $course->delete();

        $notification = [
            'message' => 'Course Deleted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }
}
