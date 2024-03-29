<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseAcces;
use App\Models\Order;
use App\Models\Payment;
use App\Models\PaymentMethod;
use App\Models\Setting;
use App\Models\Wallet;
use App\Models\WalletHistory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PaymentController extends Controller
{
    public function index() {
        $payments = Payment::with('user', 'course', 'payment_method')->orderBy('payment_status', 'ASC')->get();
        $title = 'All Payment';
        return view('admin.payment.index', compact('payments', 'title'));
    }

    public function accept(Payment $payment) {
        $setting = Setting::first();
        $payment->update(['payment_status' => 'SUCCESS']);
        $course = $payment->course;
        $course->increment('course_enroll');

        $affiliate = [
            [
                'id' => $setting->default_affiliate,
                'amount' => $course->admin_percentage * $payment->payment_price / 100,
                'desc' => 'Admin Affiliate From ' . $payment->user->username,
            ],
            [
                'id' => $course->teacher_id,
                'amount' => $course->teacher_percentage * $payment->payment_price / 100,
                'desc' => 'Payment Course From ' . $payment->user->username,
            ],
            [
                'id' => $payment->user->affiliate_id,
                'amount' => $course->affiliate_percentage * $payment->payment_price / 100,
                'desc' => 'User Affiliate From ' . $payment->user->username,
            ],
        ];

        foreach ($affiliate as $affili) {
            Wallet::findOrFail($affili['id'])->increment('wallet_amount', $affili['amount']);
            WalletHistory::create([
                'wallet_id' => $affili['id'],
                'wallet_history_desc' => $affili['desc'],
                'wallet_history_money' => $affili['amount'],
                'wallet_history_status' => 'SUCCESS'
            ]);
        }

        CourseAcces::create([
            'course_id' => $course->id,
            'user_id' => $payment->user_id,
            'course_acces_subscribe' => $course->course_subscribe ? Carbon::now()->addDays($course->course_subscribe) : null,
        ]);

        $notification = [
            'message' => 'Payment Accepted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }

    public function decline(Payment $payment) {
        $payment->update(['payment_status' => 'WRONG']);
        $notification = [
            'message' => 'Payment Declined Successfully',
            'alert-type' => 'info',
        ];

        return redirect()->back()->with($notification);
    }

    public function user_store(Request $request) {
        $request->validate([
            'order_id' => 'required|integer',
            'payment_method_id' => 'required|integer',
            'payment_picture' => 'required|file|max:5120',
        ]);

        $order = Order::findOrFail($request->order_id);
        $order->update([
            'order_status' => 'PAY'
        ]);

        $upload = $request->file('payment_picture')->store('upload/payment');

        $validated = $request->except('_token', 'payment_picture');
        $validated['payment_ref'] = Str::upper(Str::random(14));
        $validated['user_id'] = Auth::id();
        $validated['course_id'] = $order->course->id;
        $validated['payment_price'] = $order->order_price;
        $validated['payment_picture'] = $upload;

        Payment::create($validated);

        $notification = [
            'message' => 'Payment Sent Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->route('user.payment.index')->with($notification);
    }

    public function user_index() {
        $payments = Payment::with('user', 'course', 'payment_method')->where('user_id', Auth::id())->orderBy('created_at', 'DESC')->get();
        $title = 'My Payment';
        return view('user.payment.index', compact('payments', 'title'));
    }

    public function user_create() {
        $orders = Order::with('course')->where('user_id', Auth::id())->where('order_status', 'ORDER')->get();
        $payment_methods = PaymentMethod::orderBy('payment_method', 'ASC')->get();
        $title = 'Add Payment';
        return view('user.payment.create', compact('orders', 'payment_methods', 'title'));
    }
}
