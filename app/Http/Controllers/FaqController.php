<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index() {
        $faqs = Faq::all();
        return view('admin.faq.index', compact('faqs'));
    }

    public function create() {
        return view('admin.faq.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'faq_title' => 'required',
            'faq_desc' => 'required',
        ]);

        Faq::create($validated);

        $notification = [
            'message' => 'Faq Inserted Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('admin.faq.index')->with($notification);
    }

    public function edit(Faq $faq) {
        return view('admin.faq.edit', compact('faq'));
    }

    public function update(Request $request, Faq $faq) {
        $validated = $request->validate([
            'faq_title' => 'required',
            'faq_desc' => 'required',
        ]);

        $faq->update($validated);

        $notification = [
            'message' => 'Faq Updated Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('admin.faq.index')->with($notification);
    }

    public function destroy(Faq $faq) {
        $faq->delete();

        $notification = [
            'message' => 'Faq Deleted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }
}
