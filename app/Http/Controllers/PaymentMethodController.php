<?php

namespace App\Http\Controllers;

use App\Models\PaymentMethod;
use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{
    public function index() {
        $payment_methods = PaymentMethod::orderBy('payment_method', 'ASC')->get();
        return view('admin.payment_method.index', compact('payment_methods'));
    }

    public function create() {
        return view('admin.payment_method.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'payment_method' => 'required',
            'payment_name' => 'required',
            'payment_rekening' => 'required'
        ]);

        PaymentMethod::create($validated);

        $notification = [
            'message' => 'Payment Method Inserted Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('admin.payment_method.index')->with($notification);
    }

    public function edit(PaymentMethod $payment_method) {
        return view('admin.payment_method.edit', compact('payment_method'));
    }

    public function update(Request $request, PaymentMethod $payment_method) {
        $validated = $request->validate([
            'payment_method' => 'required',
            'payment_name' => 'required',
            'payment_rekening' => 'required'
        ]);

        $payment_method->update($validated);

        $notification = [
            'message' => 'Payment Method Updated Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('admin.payment_method.index')->with($notification);
    }

    public function destroy(PaymentMethod $payment_method) {
        $payment_method->delete();

        $notification = [
            'message' => 'Payment Method Deleted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }
}
