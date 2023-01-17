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

    public function setting_index() {
        $admins = User::where('role', 'ADMIN')->orderBy('name', 'ASC')->get();
        $setting = Setting::first();
        return view('admin.setting.index', compact('admins', 'setting'));
    }

    public function setting_update(Request $request, Setting $setting) {
        $validated = $request->validate([
            'min_withdraw' => 'required',
            'presentase_admin' => 'required',
            'presentase_teacher' => 'required',
            'presentase_affiliate' => 'required',
            'default_affiliate' => 'required|integer',
        ]);

        $setting->update($validated);
        $notification = [
            'message' => 'Setting Updated Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }
}
