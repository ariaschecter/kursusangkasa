<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard() {
        $user = Auth::user();
        $notification = [
            'message' => 'Login Successfully',
            'alert-type' => 'success',
        ];
        switch ($user->role) {
            case 'ADMIN':
                return redirect()->route('admin.dashboard')->with($notification);
                break;
            case 'TEACHER':
                return redirect()->route('teacher.dashboard')->with($notification);
                break;
            
        }
    }

    public function admin_dashboard() {
        return view('admin.index');
    }

    public function teacher_dashboard() {
        return view('teacher.index');
    }
}
