@extends('frontend.frontend_master')

@section('frontend')
@php
    $setting = \App\Models\Setting::first();
@endphp
<!-- breadcrumb area start -->
<div class="breadcrumb__area include-bg pt-200 pb-150 breadcrumb__overlay" data-background="{{ asset('storage/' . $setting->banner_image) }}">
    <div class="container">
       <div class="row">
          <div class="col-xxl-12">
             <div class="breadcrumb__content p-relative z-index-1">
                <h3 class="breadcrumb__title">Checkout</h3>
                <div class="breadcrumb__list">
                   <span><a href="#">Home</a></span>
                   <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                   <span>checkout</span>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- breadcrumb area end -->

<!-- checkout-area start -->
<section class="checkout-area pt-100 pb-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="your-order mb-30 ">
                <h3>Your order</h3>
                <form method="POST" action="{{ route('home.payment.store', $course->course_slug) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="your-order-table table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th class="product-name">Product</th>
                                    <th class="product-total">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="cart_item">
                                    <td class="product-name">
                                        {{ $course->course_name }}
                                    </td>
                                    <td class="product-total">
                                        <span class="amount">Rp. {{ number_format($course->price_new) }}</span>
                                    </td>
                                </tr>
                                <tr class="cart_item">
                                    <td class="product-name">
                                        Additional Fee
                                    </td>
                                    <td class="product-total">
                                        <span class="amount">Rp. {{ number_format($additional) }}</span>
                                    </td>
                                </tr>
                                <tr class="cart-item">
                                    <td class="product-name">Order Total</td>
                                    <td>
                                        <strong>
                                            <span class="amount">Rp. {{ number_format($course->price_new + $additional, 0) }}</span>
                                        </strong>
                                    </td>
                                </tr>
                                <input type="hidden" value="{{ $course->price_new + $additional }}" name="payment_price">
                                <tr class="cart_item">
                                    <td class="product-name">
                                        Payment Method @error('payment_method_id') <span class="text-danger"> {{ $message }}</span> @enderror
                                    </td>
                                    <td class="product-total">
                                        <select class="amount" aria-label="Default Select Example" name="payment_method_id" id="payment_method_id">
                                            <option>Open this select menu</option>
                                            @foreach ($payment_methods as $payment_method)
                                                <option value="{{ $payment_method->id }}">{{ $payment_method->payment_method . ' - ' . $payment_method->payment_rekening . ' a.n. ' . $payment_method->payment_name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr class="cart_item">
                                    <td class="product-name">
                                        Payment Picture @error('payment_picture') <span class="text-danger"> {{ $message }}</span> @enderror
                                    </td>
                                    <td class="product-total">
                                        <input type="file" class="form-control" name="payment_picture">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="payment-method">
                        <div class="accordion" id="checkoutAccordion">
                            <div class="your-order-table table-responsive">
                                <table>
                                    <tbody>

                                </table>
                            </div>
                        </div>
                        <div class="order-button-payment mt-20">
                            <button type="submit" class="tp-submit-btn">Place order</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- checkout-area end -->
@endsection
