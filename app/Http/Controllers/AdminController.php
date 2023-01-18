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
        return view('admin.user.index', compact('users'));
    }

    public function teacher_index() {
        $teachers = Teacher::with('user')->get();
        return view('admin.teacher.index', compact('teachers'));
    }
}
