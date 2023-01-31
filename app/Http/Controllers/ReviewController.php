<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function index() {
        $reviews = Review::with('user','teacher', 'course')->orderBy('created_at', 'DESC')->get();
        return view('admin.review.index', compact('reviews'));
    }

    public function teacher_index() {
        $reviews = Review::with('course', 'user')->where('teacher_id', Auth::id())->orderBy('created_at', 'DESC')->get();
        return view('teacher.review.index', compact('reviews'));
    }
    public function store(Request $request, Course $course) {
        $validated = $request->validate([
            'review_star' => 'required|integer',
            'review_feedback' => 'required|max:255'
        ]);

        $validated['teacher_id'] = $course->teacher_id;
        $validated['course_id'] = $course->id;
        $validated['user_id'] = Auth::id();

        Review::create($validated);

        $notification = [
            'message' => 'Review Added Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);

    }
}
