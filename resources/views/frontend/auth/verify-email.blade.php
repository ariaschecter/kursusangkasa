@php
    $title = 'Verify Email';
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
            <h3 class="breadcrumb__title">Verify Email</h3>
            <div class="breadcrumb__list">
               <span><a href="{{ route('home.index') }}">Home</a></span>
               <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
               <span>Verify Email First!</span>
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
                <h2 class="tp-section__title">Verify Your Email First!</h2>
                <p>Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.</p>
             </div>
             <div class="tp-section__title-wrapper text-center mb-55">
                @if (Session::has('status') == 'verification-link-sent')
                <p class="text-success">A new verification link has been sent to the email address you provided during registration.</p>
               @endif
             </div>
          </div>
       </div>

       <div class="row">
          <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
             <div class="sign__wrapper white-bg">
                <div class="sign__form">
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-8">
                                <button type="submit" class="btn btn-primary"> <span></span>Resend Verification Email</button>
                            </div>
                            <div class="col-lg-4">
                                <a class="btn btn-warning" href="{{ route('logout') }}">Logout</a>
                            </div>
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
