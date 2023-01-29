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
                    <h3 class="breadcrumb__title">Reset Password</h3>
                    <div class="breadcrumb__list">
                    <span><a href="{{ route('home.index') }}">Home</a></span>
                    <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                    <span>Reset Password</span>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- breadcrumb area end -->


    <!-- sign up area start -->
    <section class="signup__area po-rel-z1 pt-100 pb-145 p-relative fix">
    <div class="sign__shape">
        <img class="man-1" src="{{ asset('frontend/assets/img/icons/about-shapes.png') }}" alt="">
        <img class="man-2" src="{{ asset('frontend/assets/img/icons/book-shape.png') }}" alt="">
        <img class="circle" src="{{ asset('frontend/assets/img/icons/role-shape.png') }}" alt="">
        <img class="zigzag" src="{{ asset('frontend/assets/img/icons/ring-2.png') }}" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2">
                <div class="tp-section__title-wrapper text-center mb-55">
                <h2 class="tp-section__title">Reset Password</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                <div class="sign__wrapper white-bg">
                <div class="sign__form">
                    <form method="POST" action="{{ route('password.store') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <div class="sign__input-wrapper mb-25">
                            <h5>Email</h5>
                            <div class="sign__input">
                                <input type="text" name="email" placeholder="e-mail address" value="{{ old('email', $request->email) }}" readonly>
                                <i class="fal fa-envelope"></i>
                            </div>
                            @error('email') <span class="text-danger"> {{ $message }}</span> @enderror
                        </div>

                        <div class="sign__input-wrapper mb-25">
                            <h5>Password</h5>
                            <div class="sign__input">
                                <input type="password" name="password" placeholder="Password">
                                <i class="fal fa-lock"></i>
                            </div>
                            @error('password') <span class="text-danger"> {{ $message }}</span> @enderror
                        </div>
                        <div class="sign__input-wrapper mb-10">
                            <h5>Password Confirmation</h5>
                            <div class="sign__input">
                                <input type="password" name="password_confirmation" placeholder="Re-Password">
                                <i class="fal fa-lock"></i>
                            </div>
                            @error('password_confirmation') <span class="text-danger"> {{ $message }}</span> @enderror
                        </div>

                        <button type="submit" class="e-btn w-100"> <span></span> Reset Password</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- sign up area end -->
@endsection
