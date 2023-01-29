<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class SettingController extends Controller
{
    public function setting() {
        $admins = User::where('role', 'ADMIN')->orderBy('name', 'ASC')->get();
        $setting = Setting::first();
        return view('admin.setting.index', compact('admins', 'setting'));
    }

    public function image() {
        $setting = Setting::first();
        return view('admin.setting.image', compact('setting'));
    }

    public function setting_update(Request $request, Setting $setting) {
        $request->validate([
            'no_phone' => 'required|integer',
            'min_withdraw' => 'required|integer',
            'presentase_admin' => 'required|integer',
            'presentase_teacher' => 'required|integer',
            'presentase_affiliate' => 'required|integer',
            'default_affiliate' => 'required|integer',
        ]);

        $validated = $request->except(['_token']);

        $setting->update($validated);

        $notification = [
            'message' => 'Setting Updated Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }

    public function image_update(Request $request, Setting $setting) {
        $request->validate([
            'hero_image' => 'file|image|max:5120',
            'banner_image' => 'file|image|max:5120',
        ]);

        if ($request->hero_image) {
            $image = $request->file('hero_image');
            $hero_image = 'upload/home/' . time() . uniqid() . '.' . $image->getClientOriginalExtension();
            Storage::delete($setting->hero_image);
            Image::make($image)->resize(735, 835)->save('storage/' . $hero_image);
        } else {
            $hero_image = $setting->hero_image;
        }

        if ($request->banner_image) {
            $image = $request->file('banner_image');
            $banner_image = 'upload/home/' . time() . uniqid() . '.' . $image->getClientOriginalExtension();
            Storage::delete($setting->banner_image);
            Image::make($image)->resize(1920, 1280)->save('storage/' . $banner_image);
        } else {
            $banner_image = $setting->banner_image;
        }

        $validated['hero_image'] = $hero_image;
        $validated['banner_image'] = $banner_image;

        $setting->update($validated);

        $notification = [
            'message' => 'Setting Updated Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }
}
