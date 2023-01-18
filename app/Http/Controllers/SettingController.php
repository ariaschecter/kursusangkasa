<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Image;

class SettingController extends Controller
{
    public function setting_index() {
        $admins = User::where('role', 'ADMIN')->orderBy('name', 'ASC')->get();
        $setting = Setting::first();
        return view('admin.setting.index', compact('admins', 'setting'));
    }

    public function setting_update(Request $request, Setting $setting) {
        $request->validate([
            'min_withdraw' => 'required',
            'presentase_admin' => 'required',
            'presentase_teacher' => 'required',
            'presentase_affiliate' => 'required',
            'default_affiliate' => 'required|integer',
            'hero_image' => 'file|image|max:5120',
        ]);

        $validated = $request->except(['_token', 'hero_image']);
        $image = '';
        if ($request->hero_image) {
            $image =Image::make($request->hero_image)->resize(738, 835)->store('upload/home');
        }

        $validated = $image;

        $setting->update($validated);
        $notification = [
            'message' => 'Setting Updated Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }
}
