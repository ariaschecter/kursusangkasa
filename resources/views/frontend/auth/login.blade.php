@php
    $title = 'Login Page';
@endphp

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
                <h3 class="breadcrumb__title">Log In</h3>
                <div class="breadcrumb__list">
                   <span><a href="{{ route('home.index') }}">Home</a></span>
                   <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                   <span>Log In</span>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- breadcrumb area end -->

 <!-- sign up area start -->
 <div class="signup__area po-rel-z1 pt-100 pb-145 p-relative">
    <div class="sign__shape">
        <img class="man-1" src="{{ asset('frontend/assets/img/icons/about-shapes.png') }}" alt="">
        <img class="man-2" src="{{ asset('frontend/assets/img/icons/book-shape.png') }}" alt="">
       <img class="circle" src="{{ asset('frontend/assets/img/icons/role-shape.png') }}" alt="">
       <img class="zigzag" src="{{ asset('frontend/assets/img/icons/lines-shape.png') }}" alt="">
    </div>
    <div class="container">
       <div class="row">
          <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2">
             <div class="tp-section__title-wrapper text-center mb-55">
                <h2 class="tp-section__title">Log in to <br> recharge direct.</h2>
                <p>it you don't have an account you can <a href="{{ route('register') }}" class="text-primary">Register here!</a></p>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
             <div class="sign__wrapper white-bg">
                <div class="sign__header mb-35">
                </div>
                <div class="sign__form">
                   <form method="POST" action="{{ route('login') }}">
                    @csrf
                      <div class="sign__input-wrapper mb-25">
                         <h5>Email</h5>
                         <div class="sign__input">
                            <input type="text" name="email" placeholder="e-mail address">
                            <i class="fal fa-envelope"></i>
                         </div>
                         @error('email') <span class="text-danger"> {{ $message }}</span> @enderror
                      </div>
                      <div class="sign__input-wrapper mb-10">
                         <h5>Password</h5>
                         <div class="sign__input">
                            <input type="password" name="password" placeholder="Password">
                            <i class="fal fa-lock"></i>
                         </div>
                         @error('password') <span class="text-danger"> {{ $message }}</span> @enderror
                      </div>
                      <div class="sign__action d-sm-flex justify-content-between mb-30">
                        <div class="sign__agree d-flex align-items-center">
                            <input class="m-check-input" type="checkbox" id="remember" name="remember">
                            <label class="m-check-label" for="remember">Remember Me
                            </label>
                        </div>
                        <div class="sign__forgot">
                            <a href="{{ route('password.request') }}">Forgot your password?</a>
                        </div>
                      </div>
                      <button type="submit" class="e-btn  w-100"> <span></span> Sign In</button>
                      <div class="sign__new text-center mt-20">
                         <p>New to Markit? <a href="{{ route('register') }}">Sign Up</a></p>
                      </div>
                   </form>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- sign up area end -->

@endsection
