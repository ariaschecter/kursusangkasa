<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

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
        if ($request->hero_image) {
            $image = $request->file('hero_image');
            $upload = 'upload/home/' . time() . uniqid() . '.' . $image->getClientOriginalExtension();
            Storage::delete($setting->hero_image);
            Image::make($image)->resize(735, 835)->save('storage/' . $upload);
        } else {
            $upload = $setting->hero_image;
        }

        $validated = $request->except(['_token', 'hero_image']);
        $validated['hero_image'] = $upload;

        $setting->update($validated);

        $notification = [
            'message' => 'Setting Updated Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }
}
