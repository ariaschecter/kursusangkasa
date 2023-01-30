<?php

namespace App\Http\Controllers;

use App\Models\Youtube;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;

class YoutubeController extends Controller
{
    public function index() {
        $youtubes = Youtube::latest()->get();
        return view('admin.youtube.index', compact('youtubes'));
    }

    public function create() {
        return view('admin.youtube.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'youtube_picture' => 'required|file|image|max:5120',
            'youtube_link' => 'required',
        ]);

        $image = $request->file('youtube_picture');
        $youtube_picture = 'upload/youtube/' . time() . uniqid() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(800, 533)->save('storage/' . $youtube_picture);

        $validated['youtube_picture'] = $youtube_picture;

        Youtube::create($validated);

        $notification = [
            'message' => 'Youtube Inserted Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('admin.youtube.index')->with($notification);
    }

    public function edit(Youtube $youtube) {
        return view('admin.youtube.edit', compact('youtube'));
    }

    public function update(Request $request, Youtube $youtube) {
        $request->validate([
            'youtube_picture' => 'file|image|max:5120',
            'youtube_link' => 'required',
        ]);

        if ($request->youtube_picture) {
            Storage::delete($youtube->youtube_picture);
            $image = $request->file('youtube_picture');
            $youtube_picture = 'upload/youtube/' . time() . uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(800, 533)->save('storage/' . $youtube_picture);
        } else {
            $youtube_picture = $youtube->youtube_picture;
        }

        $update = $request->except(['_token', 'youtube_picture']);
        $update['youtube_picture'] = $youtube_picture;

        $youtube->update($update);

        $notification = [
            'message' => 'Youtube Updated Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('admin.youtube.index')->with($notification);
    }

    public function destroy(Youtube $youtube) {
        Storage::delete($youtube->youtube_picture);
        $youtube->delete();

        $notification = [
            'message' => 'Youtube Deleted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }
}
