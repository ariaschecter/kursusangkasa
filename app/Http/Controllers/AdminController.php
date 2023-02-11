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

    public function archive() {
        $users = User::onlyTrashed()->get();
        $title = 'User Archive';
        return view('admin.user.archive', compact('users', 'title'));
    }

    public function restore($user) {
        User::withTrashed()->find($user)->restore();

        $notification = [
            'message' => 'User Restored Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }

    public function edit(User $user) {
        return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request, User $user) {
        $validated = $request->validate([
            'name' => 'required',
            'role' => 'required'
        ]);

        $user->update($validated);

        $notification = [
            'message' => 'User Updated Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('admin.user.index')->with($notification);
    }

    public function destroy(User $user) {
        $user->delete();

        $notification = [
            'message' => 'User Deleted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }
}
