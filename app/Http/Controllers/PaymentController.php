<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Payment;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PaymentController extends Controller
{
    public function index() {
        $payments = Payment::with('user', 'course', 'payment_method')->orderBy('payment_status', 'ASC')->get();
        return view('admin.payment.index', compact('payments'));
    }
    public function create(Course $course) {
        $additional = fake()->numberBetween(1, 999);
        $payment_methods = PaymentMethod::orderBy('payment_name', 'ASC')->get();
        return view('frontend.payment.create', compact('course', 'additional', 'payment_methods'));
    }

    public function store(Request $request, Course $course) {
        $request->validate([
            'payment_method_id' => 'required|integer',
            'payment_picture' => 'required|file|max:5120',
        ]);

        $upload = $request->file('payment_picture')->store('upload/payment');

        $validated = $request->except('_token', 'payment_picture');
        $validated['payment_ref'] = Str::upper(Str::random(14));
        $validated['user_id'] = Auth::id();
        $validated['course_id'] = $course->id;
        $validated['payment_picture'] = $upload;

        Payment::create($validated);
        return redirect()->route('home.course.index');
    }
}
