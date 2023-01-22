<?php

namespace App\Http\Controllers;

use App\Models\CourseAcces;
use Illuminate\Http\Request;

class CourseAccesController extends Controller
{
    public function index() {
        $course_acces = CourseAcces::with('course', 'user')->get();
        return view('admin.course_acces.index', compact('course_acces'));
    }
}
