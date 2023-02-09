<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function user_index() {
        $users = User::orderBy('username', 'ASC')->get();
        $title = 'All User';
        return view('admin.user.index', compact('users', 'title'));
    }

    public function teacher_index() {
        $teachers = Teacher::with('user')->get();
        $title = 'All Teacher';
        return view('admin.teacher.index', compact('teachers', 'title'));
    }
}
