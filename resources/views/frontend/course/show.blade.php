<!-- breadcrumb area start -->
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
            <h3 class="breadcrumb__title">Course Details</h3>
            <div class="breadcrumb__list">
               <span><a href="{{ route('home.index') }}">Home</a></span>
               <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
               <span>{{ $course->course_name }}</span>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<!-- breadcrumb area end -->


<!-- course details -->

<div class="course-details pt-60">
<div class="container">

   <div class="course-details__header">
      <div class="container">
         <div class="row">
            <div class="col-lg-8">
               <div class="page__title-content mb-25">
                  <span class="page__title-pre">{{ $course->category->category_name }}</span>
                  <h1 class="page__title">{{ $course->course_name }}</h1>
               </div>
               @include('template.teacher_overview')
               <div class="course-details__content">
                  <div class="course__img w-img mb-30">
                     <img src="{{ asset('storage/' . $course->course_picture) }}" alt="">
                  </div>
                  <div class="course__tab-2 mb-45">
                     <ul class="nav nav-tabs" id="courseTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true"> <i class="icon_ribbon_alt"></i> <span>Discription</span> </button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="curriculum-tab" data-bs-toggle="tab" data-bs-target="#curriculum" type="button" role="tab" aria-controls="curriculum" aria-selected="false"> <i class="icon_book_alt"></i> <span>Curriculum</span> </button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="false"> <i class="icon_star_alt"></i> <span>Reviews</span> </button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="member-tab" data-bs-toggle="tab" data-bs-target="#member" type="button" role="tab" aria-controls="member" aria-selected="false"> <i class="fal fa-user"></i> <span>Members</span> </button>
                        </li>
                      </ul>
                  </div>
               </div>
               <div class="course__tab-content mb-95">
                  <div class="tab-content" id="courseTabContent">
                     <div class="tab-pane fade active show" id="description" role="tabpanel" aria-labelledby="description-tab">
                        <div class="mb-3" class="course__description">
                           <h3>Course Overview</h3>
                           <p>{!! $course->course_desc !!}</p>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="curriculum" role="tabpanel" aria-labelledby="curriculum-tab">
                        <div class="course__curriculum">
                            @foreach ($course->sub_course as $sub_course)
                            <div class="accordion" id="course__accordion-2">
                                <div class="accordion-item mb-50">
                                    <h2 class="accordion-header" id="{{ $sub_course->id }}">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $sub_course->sub_course_slug }}" aria-expanded="true" aria-controls="{{ $sub_course->sub_course_slug }}">
                                            {{ $sub_course->sub_course_name }}
                                        </button>
                                    </h2>

                                    <div id="{{ $sub_course->sub_course_slug }}" class="accordion-collapse  collapse show" aria-labelledby="{{ $sub_course->id }}" data-bs-parent="#course__accordion-2">
                                    <div class="accordion-body">
                                        @foreach ($sub_course->list_course as $list_course)
                                            <div class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                                <div class="course__curriculum-info">
                                                    <svg viewBox="0 0 24 24">
                                                        <polygon class="st0" points="23,7 16,12 23,17 "></polygon>
                                                        <path class="st0" d="M3,5h11c1.1,0,2,0.9,2,2v10c0,1.1-0.9,2-2,2H3c-1.1,0-2-0.9-2-2V7C1,5.9,1.9,5,3,5z"></path>
                                                        </svg>
                                                    <h3>{{ $list_course->list_course_name }}</h3>
                                                </div>
                                                {{-- <div class="course__curriculum-meta">
                                                    <span class="time"> <i class="icon_clock_alt"></i> 15 minutes</span>
                                                </div> --}}
                                            </div>
                                        @endforeach

                                    </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                     </div>
                     <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                        <div class="course__review">
                           <h3>Reviews</h3>

                            <div class="course__review-rating mb-50">
                                <div class="row g-0">
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                        <div class="course__review-rating-info grey-bg text-center">
                                        <h5>{{ $course->review->avg('review_star') ?? 0 }}</h5>
                                        <ul>
                                            <div class="rating-star">
                                                <input type="hidden" class="rating" data-filled="mdi mdi-star text-warning" data-empty="mdi mdi-star-outline text-muted" data-readonly value="{{  $course->review->avg('review_star') }}"/>
                                            </div>
                                        </ul>
                                        <p>{{ count($course->review) }} Ratings</p>
                                        </div>
                                    </div>
                                    <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8">
                                        <div class="course__review-details grey-bg">
                                        <h5>Detailed Rating</h5>
                                        <div class="course__review-content mb-20">
                                            @php
                                                $reviews = $course->review;
                                                $a = $b = $c = $d = $d = $e = 0;
                                                $i = 0;
                                                foreach ($reviews as $review) {
                                                    switch ($review->review_star) {
                                                        case 1:
                                                            $a++;
                                                            break;
                                                        case 2:
                                                            $b++;
                                                            break;
                                                        case 3:
                                                            $c++;
                                                            break;
                                                        case 4:
                                                            $d++;
                                                            break;
                                                        case 5:
                                                            $e++;
                                                            break;
                                                    }
                                                    $i++;
                                                }
                                                if ($i == 0) {
                                                    $rating_boxs = [
                                                        [
                                                            'angka' => 5,
                                                            'percentage' => 0,
                                                        ],
                                                        [
                                                            'angka' => 4,
                                                            'percentage' => 0,
                                                        ],
                                                        [
                                                            'angka' => 3,
                                                            'percentage' => 0,
                                                        ],
                                                        [
                                                            'angka' => 2,
                                                            'percentage' => 0,
                                                        ],
                                                        [
                                                            'angka' => 1,
                                                            'percentage' => 0,
                                                        ],
                                                    ];
                                                } else {
                                                    $rating_boxs = [
                                                        [
                                                            'angka' => 5,
                                                            'percentage' => $e/$i*100,
                                                        ],
                                                        [
                                                            'angka' => 4,
                                                            'percentage' => $d/$i*100,
                                                        ],
                                                        [
                                                            'angka' => 3,
                                                            'percentage' => $c/$i*100,
                                                        ],
                                                        [
                                                            'angka' => 2,
                                                            'percentage' => $b/$i*100,
                                                        ],
                                                        [
                                                            'angka' => 1,
                                                            'percentage' => $a/$i*100,
                                                        ],
                                                    ];
                                                }
                                            @endphp
                                            @foreach ($rating_boxs as $rating_box)
                                                <div class="course__review-item d-flex align-items-center justify-content-between">
                                                    <div class="course__review-text">
                                                        <span>{{ $rating_box['angka'] }} stars</span>
                                                    </div>
                                                    <div class="course__review-progress">
                                                        <div class="single-progress" data-width="{{ $rating_box['percentage'] }}%" style="width: {{ $rating_box['percentage'] }}%;"></div>
                                                    </div>
                                                    <div class="course__review-percent">
                                                        <h5>{{ $rating_box['percentage'] }}%</h5>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="course__comment mb-75">
                                <h3>{{ count($course->review) }} Reviews</h3>
                                <ul>
                                    @foreach ($course->review as $reviewer)
                                    @include('template.review_box')
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="member" role="tabpanel" aria-labelledby="member-tab">
                        @include('template.member_box')
                     </div>
                   </div>
               </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4">
               <div class="course__sidebar pl-70 p-relative">
                  <div class="course__sidebar-widget-2 white-bg mb-20">
                     <div class="course__video">
                        <div class="course__video-thumb w-img mb-25">
                           <img src="{{ asset('storage/' . $course->course_picture) }}" alt="">
                           <div class="course__video-play">
                              <a href="{{ $list_course->list_course_link }}" clas data-fancybox="" class="play-btn popup-video"> <i class="fas fa-play"></i> </a>
                           </div>
                        </div>
                        <div class="course__video-meta mb-25 d-flex align-items-center justify-content-between">
                           <div class="course__video-price">
                              <h5>Rp. {{ number_format($course->price_new, 0) }}</h5>
                              <h5 class="old-price">Rp. {{ number_format($course->price_old, 0) }}</h5>
                           </div>
                           <div class="course__video-discount">
                              <span>{{ ($course->price_old-$course->price_new)/$course->price_old*100 }}% OFF</span>
                           </div>
                        </div>
                        <div class="course__video-content mb-35">
                           <ul>
                              <li class="d-flex align-items-center">
                                 <div class="course__video-icon">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
                                       <path class="st0" d="M2,6l6-4.7L14,6v7.3c0,0.7-0.6,1.3-1.3,1.3H3.3c-0.7,0-1.3-0.6-1.3-1.3V6z"/>
                                       <polyline class="st0" points="6,14.7 6,8 10,8 10,14.7 "/>
                                    </svg>
                                 </div>
                                 <div class="course__video-info">
                                    <h5><span>Teacher :</span> {{ $course->teacher->user->name }}</h5>
                                 </div>
                              </li>
                              <li class="d-flex align-items-center">
                                 <div class="course__video-icon">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                       <path class="st0" d="M4,19.5C4,18.1,5.1,17,6.5,17H20"/>
                                       <path class="st0" d="M6.5,2H20v20H6.5C5.1,22,4,20.9,4,19.5v-15C4,3.1,5.1,2,6.5,2z"/>
                                    </svg>
                                 </div>
                                 <div class="course__video-info">
                                    <h5><span>Lectures :</span>{{ $course->list_course ? count($course->list_course) . ' Lectures' : '0 Lecture' }}</h5>
                                 </div>
                              </li>
                              <li class="d-flex align-items-center">
                                 <div class="course__video-icon">
                                    <svg>
                                       <path class="st0" d="M13.3,14v-1.3c0-1.5-1.2-2.7-2.7-2.7H5.3c-1.5,0-2.7,1.2-2.7,2.7V14"/>
                                       <circle class="st0" cx="8" cy="4.7" r="2.7"/>
                                    </svg>
                                 </div>
                                 <div class="course__video-info">
                                    <h5><span>Enrolled :</span>{{ $course->course_enroll }} Students</h5>
                                 </div>
                              </li>
                           </ul>
                        </div>
                        <div class="course__enroll-btn p-relative z-index-1">
                           <a href="{{ route('home.payment.create', $course->course_slug) }}" class="tp-btn w-100">
                              <span>Enroll <i class="fa-regular fa-arrow-right"></i> </span>
                              <div class="transition"></div>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="course__sidebar-widget-2 white-bg mb-20">
                     <div class="course__sidebar-course">
                        <h3 class="course__sidebar-title">Related courses</h3>
                        <ul>
                            @foreach ($relateds as $related)
                                <li>
                                    <div class="course__sm d-flex align-items-center mb-10">
                                    <div class="course__sm-thumb mr-20">
                                        <a href="{{ route('home.course.show', $related->course_slug) }}">
                                            <img src="{{ asset('storage/' . $related->course_picture) }}" alt="">
                                        </a>
                                    </div>
                                    <div class="course__sm-content">
                                        <div class="course__sm-rating">
                                            <ul>
                                                <div class="rating-star">
                                                    <input type="hidden" class="rating" data-filled="mdi mdi-star text-warning" data-empty="mdi mdi-star-outline text-muted" data-readonly value="{{ $related->review->avg('review_star') }}"/>
                                                </div>
                                            </ul>
                                        </div>
                                        <h5><a href="{{ route('home.course.show', $related->course_slug) }}">{{ $related->course_name }}</a></h5>
                                        <div class="course__sm-price">
                                            <span>Rp. {{ number_format($related->price_new, 0) }}</span>
                                        </div>
                                    </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

</div>
</div>

@endsection
