@php
    $title = 'Not Found';
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
                <h3 class="breadcrumb__title">404</h3>
                <div class="breadcrumb__list">
                    <span><a href="{{ route('home.index') }}">Home</a></span>
                   <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                   <span>404</span>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- breadcrumb area end -->

   <!-- error area start -->
   <section class="error__area pt-60 pb-90">
      <div class="container">
         <div class="row">
            <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
               <div class="error__item text-center">
                  <div class="error__thumb mb-45 w-img">
                     <img src="{{ asset('frontend/assets/img/icons/404.png') }}" alt="">
                  </div>
                  <div class="error__content">
                     <h1 class="error__title">Page Not Found!</h1>
                     <p>Please try searching for some other page.</p>
                     <a href="{{ route('home.index') }}" class="tp-btn">
                        <span>Back To Home</span>
                        <div class="transition"></div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- error area end -->
@endsection
