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
                <h3 class="breadcrumb__title">{{ $category->category_name }} Category</h3>
                <div class="breadcrumb__list">
                   <span><a href="{{ route('home.index') }}">Home</a></span>
                   <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                   <span><a href="{{ route('home.category.index') }}">Category</a></span>
                   <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                   <span>{{ $category->category_name }}</span>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- breadcrumb area end -->

 <!-- course area start -->
 <section class="course__area pt-120 pb-120">
    <div class="container">
       <div class="row">
          <div class="col-xxl-12">
             <div class="course__tab-conent pb-40">
                <div class="tab-content" id="courseTabContent">
                   <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                      <!-- course start  -->
                      <div class="tp-courses-2__section">
                         <div class="tp-courses-2__tab-content">
                            <div class="row">

                                @foreach ($courses as $course)
                                    @include('frontend.template.course_card')
                                @endforeach

                            </div>
                         </div>
                      </div>
                      <!-- course end  -->
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-xxl-12">
             <div class="basic-pagination">
                <nav>
                   {{ $courses->links() }}
                 </nav>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- course area end -->
@endsection
