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
                 <h3 class="breadcrumb__title">Instructor Details</h3>
                 <div class="breadcrumb__list">
                    <span><a href="{{ route('home.index') }}">Home</a></span>
                    <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                    <span>{{ $teacher->user->name }}</span>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </div>
  <!-- breadcrumb area end -->


  <!-- instructor details area start -->
  <section class="teacher__area pt-100 pb-110 p-relative">
     <div class="container">
        <div class="row">
           <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
              <div class="teacher__details-thumb p-relative w-img pr-30">
                 <img src="{{ asset('storage/' . $teacher->user->user_picture) }}" alt="Teacher Profile">

              </div>
           </div>
           <div class="col-xxl-8 col-xl-8 col-lg-8">
              <div class="teacher__wrapper">
                 <div class="teacher__top d-md-flex align-items-end justify-content-between">
                    <div class="teacher__info">
                       <h4>{{ $teacher->user->name }}</h4>
                       <span>{{ $teacher->teacher_tag }}</span>
                    </div>
                    <div class="teacher__rating">
                       <h5>Review:</h5>
                       <div class="teacher__rating-inner d-flex align-items-center">
                            <div class="rating-star">
                                <input type="hidden" class="rating" data-filled="mdi mdi-star text-warning" data-empty="mdi mdi-star-outline text-muted" data-readonly value="{{ $teacher->review->avg('review_star') }}"/>
                            </div>
                            {{ $teacher->review->avg('review_star') }}
                       </div>
                    </div>
                 </div>
                 <div class="teacher__bio">
                    <h3>Short Bio</h3>
                    <p>{{ $teacher->teacher_bio }}</p>
                 </div>
                 <div class="teacher__courses pt-55">
                    <div class="section__title-wrapper mb-30">
                       <h2 class="section__title">Teacher <span class="yellow-bg yellow-bg-big">Course</span></h2>
                    </div>
                    <div class="teacher__course-wrapper">
                       <div class="row">
                        @php
                            $column = 'col-lg-6';
                        @endphp
                        @foreach ($teacher->course as $course)
                            @include('frontend.template.course_card')
                        @endforeach

                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </section>
  <!-- instructor details area end -->
@endsection
