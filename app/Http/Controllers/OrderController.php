<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    public function index() {
        $orders = Order::with('user', 'course')->orderBy('order_status', 'ASC')->get();
        return view('admin.order.index', compact('orders'));
    }

    public function user_index() {
        $orders = Order::with('user', 'course')->where('user_id', Auth::id())->orderBy('order_status', 'ASC')->get();
        return view('user.order.index', compact('orders'));
    }

    public function create(Course $course) {
        $additional = fake()->numberBetween(1, 999);
        $order_ref = Str::upper(Str::random(14));
        $price = $course->price_new + $additional;
        Order::create([
            'order_ref' => $order_ref,
            'user_id' => Auth::id(),
            'course_id' => $course->id,
            'order_price' => $price,
        ]);

        $notification = [
            'message' => 'Order Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->route('user.order.index')->with($notification);
    }
}
