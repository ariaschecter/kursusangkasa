<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;

class TestimoniController extends Controller
{
    public function index() {
        $testimonis = Testimoni::all();
        return view('admin.testimoni.index', compact('testimonis'));
    }

    public function create() {
        return view('admin.testimoni.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'testimoni_name' => 'required',
            'testimoni_feedback' => 'required',
            'testimoni_picture' => 'required|file|image|max:5120',
        ]);

        $image = $request->file('testimoni_picture');
        $testimoni_picture = 'upload/profile/' . time() . uniqid() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(680, 800)->save('storage/' . $testimoni_picture);
        $validated['testimoni_picture'] = $testimoni_picture;

        Testimoni::create($validated);

        $notification = [
            'message' => 'Testimoni Inserted Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('admin.testimoni.index')->with($notification);
    }

    public function edit(Testimoni $testimoni) {
        return view('admin.testimoni.edit', compact('testimoni'));
    }

    public function update(Request $request, Testimoni $testimoni) {
        $validated = $request->validate([
            'testimoni_name' => 'required',
            'testimoni_feedback' => 'required',
            'testimoni_picture' => 'file|image|max:5120',
        ]);

        $update = $request->except(['_token', 'testimoni_picture']);

        if ($request->testimoni_picture) {
            Storage::delete($testimoni->testimoni_picture);
            $image = $request->file('testimoni_picture');
            $testimoni_picture = 'upload/profile/' . time() . uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(680, 800)->save('storage/' . $testimoni_picture);
            $update['testimoni_picture'] = $testimoni_picture;
        }

        $testimoni->update($update);

        $notification = [
            'message' => 'Testimoni Updated Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('admin.testimoni.index')->with($notification);
    }

    public function destroy(Testimoni $testimoni) {
        $testimoni->delete();

        $notification = [
            'message' => 'Testimoni Deleted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }
}
