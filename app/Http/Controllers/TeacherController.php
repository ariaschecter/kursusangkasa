<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    public function index() {
        $teacher = Teacher::findOrFail(Auth::id());
        $title = 'My Bio';
        return view('teacher.teacher.index', compact('teacher', 'title'));
    }

    public function update(Request $request) {
        $validated = $request->validate([
            'teacher_tag' => 'required',
            'teacher_bio' => 'required',
        ]);

        Teacher::findOrFail(Auth::id())->update($validated);
        $notification = [
            'message' => 'Teacher Bio Updated Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }
}
