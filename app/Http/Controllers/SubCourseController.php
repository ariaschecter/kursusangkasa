<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\ListCourse;
use App\Models\SubCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubCourseController extends Controller
{
    public function teacher_create(Course $course) {
        $title = 'Add Sub Course';
        return view('teacher.sub_course.create', compact('course', 'title'));
    }

    public function teacher_store(Request $request, Course $course) {
        $validated = $request->validate([
            'sub_course_no' => 'required|integer',
            'sub_course_name' => 'required',
        ]);

        $validated['course_id'] = $course->id;
        $validated['sub_course_slug'] = Str::random(14);

        SubCourse::create($validated);

        $notification = [
            'message' => 'Sub Course Inserted Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('teacher.course.show', $course->course_slug)->with($notification);
    }

    public function teacher_edit(SubCourse $subcourse) {
        $subcourse = SubCourse::with('course')->findOrFail($subcourse->id);
        $title = 'Edit Sub Course';
        return view('teacher.sub_course.edit', compact('subcourse', 'title'));
    }

    public function teacher_update(Request $request, SubCourse $subcourse) {
        $validated = $request->validate([
            'sub_course_no' => 'required|integer',
            'sub_course_name' => 'required',
        ]);

        $subcourse->update($validated);

        $notification = [
            'message' => 'Sub Course Updated Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('teacher.course.show', $subcourse->course->course_slug)->with($notification);
    }

    public function teacher_destroy(SubCourse $subcourse) {
        ListCourse::where('sub_course_id', $subcourse->id)->delete();
        $subcourse->delete();

        $notification = [
            'message' => 'Sub Course Deleted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }
}
