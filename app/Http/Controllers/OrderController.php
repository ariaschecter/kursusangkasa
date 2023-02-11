<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseAcces;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    public function index() {
        $orders = Order::with('user', 'course')->orderBy('order_status', 'ASC')->get();
        $title = 'All Order';
        return view('admin.order.index', compact('orders', 'title'));
    }

    public function user_index() {
        $orders = Order::with('user', 'course')->where('user_id', Auth::id())->orderBy('order_status', 'ASC')->get();
        $title = 'My Order';
        return view('user.order.index', compact('orders', 'title'));
    }

    public function create(Course $course) {
        $acces = CourseAcces::where('course_id', $course->id)->where('user_id', Auth::id())->first();

        if ($acces) {
            $lifetime = $acces->course_acces_subscribe;

        // Validate course access
        if ($lifetime != null) {
            $date = new \Carbon\Carbon($lifetime);
            $gte = $date->gte(\Carbon\Carbon::now());

            if ($gte) {
                $notification = [
                    'message' => 'You Already Buy this Course',
                    'alert-type' => 'success',
                ];
                return redirect()->route('user.course.index');
            }
        } else {
            $notification = [
                'message' => 'You Already Buy this Course',
                'alert-type' => 'warning',
            ];
            return redirect()->route('user.course.index')->with($notification);
        }
        }

        // Validate Order

        $order = Order::where('course_id', $course->id)->where('order_status', 'ORDER')->first();

        if ($order) {
            $notification = [
                'message' => 'You Already Order this Course',
                'alert-type' => 'warning',
            ];
            return redirect()->route('user.order.index')->with($notification);
        }

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
