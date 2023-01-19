@extends('frontend.frontend_master')

@section('frontend')

    <!-- breadcrumb area start -->
    <div class="breadcrumb__area include-bg pt-200 pb-150 breadcrumb__overlay"
    data-background="assets/img/breadcrumb/breadcrumb-bg.jpg">
    <div class="container">
       <div class="row">
          <div class="col-xxl-12">
             <div class="breadcrumb__content p-relative z-index-1">
                <h3 class="breadcrumb__title">Forgot Password</h3>
                <div class="breadcrumb__list">
                   <span><a href="{{ route('home.index') }}">Home</a></span>
                   <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                   <span>Forgot Password</span>
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
                <h2 class="tp-section__title">Forgot Password</h2>
                <p>Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
             </div>
             <div class="tp-section__title-wrapper text-center mb-55">
                @if (Session::has('status'))
                <p class="text-success">{{ Session::get('status', 'default'); }}</p>
               @endif
             </div>
          </div>
       </div>

       <div class="row">
          <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
             <div class="sign__wrapper white-bg">
                <div class="sign__form">
                    <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                      <div class="sign__input-wrapper mb-25">
                         <h5>Email</h5>
                         <div class="sign__input">
                            <input type="text" name="email" placeholder="e-mail address" value="{{ old('email') }}">
                            <i class="fal fa-envelope"></i>
                         </div>
                         @error('email') <span class="text-danger"> {{ $message }}</span> @enderror
                      </div>

                      <button type="submit" class="e-btn  w-100"> <span></span> Forgot Password</button>
                   </form>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- sign up area end -->

@endsection
