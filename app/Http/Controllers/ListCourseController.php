<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\ListCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ListCourseController extends Controller
{
    public function teacher_create(Course $course) {
        return view('teacher.list_course.create', compact('course'));
    }

    public function teacher_store(Request $request, Course $course) {
        $validated = $request->validate([
            'sub_course_id' => 'required|integer',
            'list_course_name' => 'required',
            'list_course_link' => 'required',
        ]);

        $validated['list_course_slug'] = Str::random(14);
        $validated['course_id'] = $course->id;

        ListCourse::create($validated);

        $notification = [
            'message' => 'Sub Course Inserted Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('teacher.course.show', $course->course_slug)->with($notification);
    }

    public function teacher_edit(ListCourse $listcourse) {
        $course = $listcourse->course;
        return view('teacher.list_course.edit', compact('listcourse', 'course'));
    }

    public function teacher_update(Request $request, ListCourse $listcourse) {
        $validated = $request->validate([
            'sub_course_id' => 'required|integer',
            'list_course_name' => 'required',
            'list_course_link' => 'required',
        ]);

        $listcourse->update($validated);

        $notification = [
            'message' => 'List Course Updated Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('teacher.course.show', $listcourse->course->course_slug)->with($notification);
    }

    public function teacher_destroy(ListCourse $listcourse) {
        $listcourse->delete();

        $notification = [
            'message' => 'List Course Deleted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }
}
