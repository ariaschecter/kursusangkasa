<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules;
use Image;

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
            case 'USER':
                return redirect()->route('user.dashboard')->with($notification);
                break;
        }
    }

    public function admin_dashboard() {
        return view('admin.index');
    }

    public function teacher_dashboard() {
        return view('teacher.index');
    }

    public function user_dashboard() {
        return view('user.index');
    }

    public function profile() {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    public function profile_update(Request $request, User $user) {
        $request->validate([
            'username' => 'required|alpha_dash|unique:users,username,' . $user->id,
            'name' => ['required', 'string', 'max:255'],
            'wa_number' => 'required|integer',
            'user_picture' => 'file|image|max:5120',
        ]);

        $update = $request->only(['name', 'username', 'wa_number']);

        if ($request->password) {
            $request->validate([
                'password' => ['required', Rules\Password::defaults()],
                'confirm_password' => 'same:password',
            ]);
            $update['password'] = bcrypt($request->password);
        }

        if ($request->user_picture) {
            if ($user->user_picture != 'upload/profile/user.png') {
                Storage::delete($user->user_picture);
            }
            $image = $request->file('user_picture');
            $user_picture = 'upload/profile/' . time() . uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(735, 835)->save('storage/' . $user_picture);
            $update['user_picture'] = $user_picture;
        }

        $user->update($update);

        $notification = [
            'message' => 'Profile Updated Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }
}
