<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function admin_dashboard() {
        return view('admin.index');
    }

    public function teacher_dashboard() {
        return view('teacher.index');
    }
}
