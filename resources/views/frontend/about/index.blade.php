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
                <h3 class="breadcrumb__title">About Us</h3>
                <div class="breadcrumb__list">
                   <span><a href="{{ route('home.index') }}">Home</a></span>
                   <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                   <span>About Us</span>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- breadcrumb area end -->

<!-- about section  start -->
    @include('frontend.template.benefit')
<!-- about section end  -->

   <!-- counter start  -->
 <div class="tp-counter__section pt-80 pb-60" data-background="{{ asset('frontend/assets/img/bg/counter-bg-1.jpg') }}">
    <div class="container">
       <div class="row justify-content-center">
          <div class="col-lg-8">
             <div class="row">
                <div class="col-lg-12">
                   <div class="tp-section__title-wrapper mb-70 text-center">
                      <h3 class="tp-section__title text-white">Our Many years of <br>
                         Experience in Numbers</h3>
                   </div>
                </div>
             </div>
             <div class="row">
                <div class="col-lg-3 col-6">
                   <div class="tp-counter__item mb-30 has-border">
                      <span><b class="counter">{{ $students }}</b>Students</span>
                   </div>
                </div>
                <div class="col-lg-3 col-6">
                   <div class="tp-counter__item has-border mb-30">
                      <span><b class="counter">{{ $courses }}</b>Courses</span>
                   </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="tp-counter__item mb-30">
                       <span><b class="counter">{{ $payments }}</b>Orders</span>
                    </div>
                 </div>
                <div class="col-lg-3 col-6">
                   <div class="tp-counter__item  has-border mb-30">
                      <span><b class="counter">{{ $teachers }}</b>Teachers</span>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- counter end  -->

   <!-- testimonial start  -->
 <div class="tp-testimonial-2__section pt-120 pb-90">
    <div class="container">
       <div class="row">
          <div class="tp-testimonial-2__wrapper p-relative">
             <div class="tp-testimonial-2__slider">
                @foreach ($reviews as $review)
                    <div class="tp-testimonial-2__box white-bg">
                        <div class="tp-testimonial-2__avata">
                            <img src="{{ asset('storage/' . $review->user->user_picture) }}" style="width: 50px; height: 50px;" alt="">
                            <span class="tp-testimonial-2__ratting">
                                <div class="rating-star">
                                    <input type="hidden" class="rating" data-filled="mdi mdi-star text-warning" data-empty="mdi mdi-star-outline text-muted" data-readonly value="{{ $review->review_star }}"/>
                                </div>
                            </span>
                        </div>
                        <div class="tp-testimonial-2__review">
                            <p>{{ $review->review_feedback }}</p>
                            <h3>{{ $review->user->name }}</h3>
                        </div>
                    </div>
                @endforeach
             </div>
          </div>
       </div>
       <div class="row">
          <div class="tp-testimonial-2__dots"></div>
       </div>
    </div>
 </div>
 <!-- testimoial end  -->
@endsection
