<!-- breadcrumb area start -->
@extends('frontend.frontend_master')

@section('frontend')
<div class="breadcrumb__area include-bg pt-200 pb-150 breadcrumb__overlay"
data-background="assets/img/breadcrumb/breadcrumb-bg.jpg">
<div class="container">
   <div class="row">
      <div class="col-xxl-12">
         <div class="breadcrumb__content p-relative z-index-1">
            <h3 class="breadcrumb__title">Courses Details</h3>
            <div class="breadcrumb__list">
               <span><a href="{{ route('home.index') }}">Home</a></span>
               <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
               <span>Courses Details</span>
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
               <div class="course-details__meta d-sm-flex">
                  <div class="course__teacher-3 d-flex align-items-center mr-70 mb-30">
                     <div class="course__teacher-thumb-3 mr-15">
                        <img src="{{ asset('storage/' . $course->teacher->user->user_picture) }}" alt="">
                     </div>
                     <div class="course__teacher-info-3">
                        <h5>Teacher</h5>
                        <p><a href="#link">{{ $course->teacher->user->name }}</a></p>
                     </div>
                  </div>
                  <div class="course__update mr-80 mb-30">
                     <h5>Last Update:</h5>
                     <p>{{ \Carbon\Carbon::parse($course->updated_at)->diffForHumans() }}</p>
                  </div>
                  <div class="course__rating-2 mb-30">
                     <h5>Review:</h5>
                     <div class="course__rating-inner d-flex align-items-center">
                        <p>
                           <i class="icon_star"></i>
                           <i class="icon_star"></i>
                           <i class="icon_star"></i>
                           <i class="icon_star"></i>
                           <i class="icon_star"></i>
                           4.5
                        </p>
                     </div>
                  </div>
               </div>
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
                           <p>{{ $course->course_desc }}</p>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="curriculum" role="tabpanel" aria-labelledby="curriculum-tab">
                        <div class="course__curriculum">
                           <div class="accordion" id="course__accordion">
                              <div class="accordion-item mb-50">
                                <h2 class="accordion-header" id="week-01">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#week-01-content" aria-expanded="false" aria-controls="week-01-content">
                                    Week 01
                                  </button>
                                </h2>
                                <div id="week-01-content" class="accordion-collapse collapse" aria-labelledby="week-01" data-bs-parent="#course__accordion">
                                  <div class="accordion-body">
                                    <div class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                       <div class="course__curriculum-info">
                                          <svg class="document" viewBox="0 0 24 24">
                                             <path class="st0" d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z"></path>
                                             <polyline class="st0" points="14,2 14,8 20,8 "></polyline>
                                             <line class="st0" x1="16" y1="13" x2="8" y2="13"></line>
                                             <line class="st0" x1="16" y1="17" x2="8" y2="17"></line>
                                             <polyline class="st0" points="10,9 9,9 8,9 "></polyline>
                                          </svg>
                                          <h3> <span>Reading:</span> Ut enim ad minim veniam</h3>
                                       </div>
                                       <div class="course__curriculum-meta">
                                          <span class="time"> <i class="icon_clock_alt"></i> 14 minutes</span>
                                          <span class="question">2 questions</span>
                                       </div>
                                    </div>
                                    <div class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                       <div class="course__curriculum-info">
                                          <svg viewBox="0 0 24 24">
                                             <polygon class="st0" points="23,7 16,12 23,17 "></polygon>
                                             <path class="st0" d="M3,5h11c1.1,0,2,0.9,2,2v10c0,1.1-0.9,2-2,2H3c-1.1,0-2-0.9-2-2V7C1,5.9,1.9,5,3,5z"></path>
                                             </svg>
                                          <h3> <span>Video: </span> Greetings and introduction</h3>
                                       </div>
                                       <div class="course__curriculum-meta">
                                          <span class="time"> <i class="icon_clock_alt"></i> 15 minutes</span>
                                       </div>
                                    </div>
                                    <div class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                       <div class="course__curriculum-info">
                                          <svg viewBox="0 0 16 16">
                                             <path class="st0" d="M2,12V8c0-3.3,2.9-6,6.4-6s6.4,2.7,6.4,6v4"></path>
                                             <path class="st0" d="M14.8,12.7c0,0.7-0.6,1.3-1.4,1.3h-0.7c-0.8,0-1.4-0.6-1.4-1.3v-2c0-0.7,0.6-1.3,1.4-1.3h2.1V12.7z M2,12.7  C2,13.4,2.6,14,3.3,14H4c0.7,0,1.3-0.6,1.3-1.3v-2c0-0.7-0.6-1.3-1.3-1.3H2V12.7z"></path>
                                          </svg>
                                          <h3> <span>Audio:</span> Interactive lesson</h3>
                                       </div>
                                       <div class="course__curriculum-meta">
                                          <span class="time"> <i class="icon_clock_alt"></i> 7 minutes</span>
                                          <span class="question">3 questions</span>
                                       </div>
                                    </div>
                                    <div class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                       <div class="course__curriculum-info">
                                          <svg class="document" viewBox="0 0 24 24">
                                             <path class="st0" d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z"></path>
                                             <polyline class="st0" points="14,2 14,8 20,8 "></polyline>
                                             <line class="st0" x1="16" y1="13" x2="8" y2="13"></line>
                                             <line class="st0" x1="16" y1="17" x2="8" y2="17"></line>
                                             <polyline class="st0" points="10,9 9,9 8,9 "></polyline>
                                          </svg>
                                          <h3> <span>Reading: </span> Ut enim ad minim veniam</h3>
                                       </div>
                                       <div class="course__curriculum-meta">
                                          <span class="time"> <i class="icon_clock_alt"></i> 22 minutes</span>
                                       </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                           </div>
                           <div class="accordion" id="course__accordion-2">
                              <div class="accordion-item mb-50">
                                <h2 class="accordion-header" id="week-02">
                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#week-02-content" aria-expanded="true" aria-controls="week-02-content">
                                    Week 02
                                  </button>
                                </h2>
                                <div id="week-02-content" class="accordion-collapse  collapse show" aria-labelledby="week-02" data-bs-parent="#course__accordion-2">
                                  <div class="accordion-body">
                                    <div class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                       <div class="course__curriculum-info">
                                          <svg class="document" viewBox="0 0 24 24">
                                             <path class="st0" d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z"></path>
                                             <polyline class="st0" points="14,2 14,8 20,8 "></polyline>
                                             <line class="st0" x1="16" y1="13" x2="8" y2="13"></line>
                                             <line class="st0" x1="16" y1="17" x2="8" y2="17"></line>
                                             <polyline class="st0" points="10,9 9,9 8,9 "></polyline>
                                          </svg>
                                          <h3> <span>Reading:</span> Ut enim ad minim veniam</h3>
                                       </div>
                                       <div class="course__curriculum-meta">
                                          <span class="time"> <i class="icon_clock_alt"></i> 14 minutes</span>
                                       </div>
                                    </div>
                                    <div class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                       <div class="course__curriculum-info">
                                          <svg viewBox="0 0 24 24">
                                             <polygon class="st0" points="23,7 16,12 23,17 "></polygon>
                                             <path class="st0" d="M3,5h11c1.1,0,2,0.9,2,2v10c0,1.1-0.9,2-2,2H3c-1.1,0-2-0.9-2-2V7C1,5.9,1.9,5,3,5z"></path>
                                             </svg>
                                          <h3> <span>Video: </span> Greetings and introduction</h3>
                                       </div>
                                       <div class="course__curriculum-meta">
                                          <span class="time"> <i class="icon_clock_alt"></i> 15 minutes</span>
                                       </div>
                                    </div>
                                    <div class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                       <div class="course__curriculum-info">
                                          <svg viewBox="0 0 16 16">
                                             <path class="st0" d="M2,12V8c0-3.3,2.9-6,6.4-6s6.4,2.7,6.4,6v4"></path>
                                             <path class="st0" d="M14.8,12.7c0,0.7-0.6,1.3-1.4,1.3h-0.7c-0.8,0-1.4-0.6-1.4-1.3v-2c0-0.7,0.6-1.3,1.4-1.3h2.1V12.7z M2,12.7  C2,13.4,2.6,14,3.3,14H4c0.7,0,1.3-0.6,1.3-1.3v-2c0-0.7-0.6-1.3-1.3-1.3H2V12.7z"></path>
                                             </svg>
                                          <h3> <span>Audio:</span> Interactive lesson</h3>
                                       </div>
                                       <div class="course__curriculum-meta">
                                          <span class="time"> <i class="icon_clock_alt"></i> 7 minutes</span>
                                          <span class="question">2 questions</span>
                                       </div>
                                    </div>
                                    <div class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                       <div class="course__curriculum-info">
                                          <svg class="document" viewBox="0 0 24 24">
                                             <path class="st0" d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z"></path>
                                             <polyline class="st0" points="14,2 14,8 20,8 "></polyline>
                                             <line class="st0" x1="16" y1="13" x2="8" y2="13"></line>
                                             <line class="st0" x1="16" y1="17" x2="8" y2="17"></line>
                                             <polyline class="st0" points="10,9 9,9 8,9 "></polyline>
                                          </svg>
                                          <h3> <span>Reading: </span> Ut enim ad minim veniam</h3>
                                       </div>
                                       <div class="course__curriculum-meta">
                                          <span class="time"> <i class="icon_clock_alt"></i> 22 minutes</span>
                                       </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                        <div class="course__review">
                           <h3>Reviews</h3>
                           <p>Gosh william I'm telling crikey burke I don't want no agro A bit of how's your father bugger all mate off his nut that, what a plonker cuppa owt to do</p>

                           <div class="course__review-rating mb-50">
                              <div class="row g-0">
                                 <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                    <div class="course__review-rating-info grey-bg text-center">
                                       <h5>5</h5>
                                       <ul>
                                          <li><a href="#"> <i class="icon_star"></i> </a></li>
                                          <li><a href="#"> <i class="icon_star"></i> </a></li>
                                          <li><a href="#"> <i class="icon_star"></i> </a></li>
                                          <li><a href="#"> <i class="icon_star"></i> </a></li>
                                          <li><a href="#"> <i class="icon_star"></i> </a></li>
                                       </ul>
                                       <p>4 Ratings</p>
                                    </div>
                                 </div>
                                 <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8">
                                    <div class="course__review-details grey-bg">
                                       <h5>Detailed Rating</h5>
                                       <div class="course__review-content mb-20">
                                          <div class="course__review-item d-flex align-items-center justify-content-between">
                                             <div class="course__review-text">
                                                <span>5 stars</span>
                                             </div>
                                             <div class="course__review-progress">
                                                <div class="single-progress" data-width="100%" style="width: 100%;"></div>
                                             </div>
                                             <div class="course__review-percent">
                                                <h5>100%</h5>
                                             </div>
                                          </div>
                                          <div class="course__review-item d-flex align-items-center justify-content-between">
                                             <div class="course__review-text">
                                                <span>4 stars</span>
                                             </div>
                                             <div class="course__review-progress">
                                                <div class="single-progress" data-width="30%" style="width: 30%;"></div>
                                             </div>
                                             <div class="course__review-percent">
                                                <h5>30%</h5>
                                             </div>
                                          </div>
                                          <div class="course__review-item d-flex align-items-center justify-content-between">
                                             <div class="course__review-text">
                                                <span>3 stars</span>
                                             </div>
                                             <div class="course__review-progress">
                                                <div class="single-progress" data-width="0%" style="width: 0%;"></div>
                                             </div>
                                             <div class="course__review-percent">
                                                <h5>0%</h5>
                                             </div>
                                          </div>
                                          <div class="course__review-item d-flex align-items-center justify-content-between">
                                             <div class="course__review-text">
                                                <span>2 stars</span>
                                             </div>
                                             <div class="course__review-progress">
                                                <div class="single-progress" data-width="0%" style="width: 0%;"></div>
                                             </div>
                                             <div class="course__review-percent">
                                                <h5>0%</h5>
                                             </div>
                                          </div>
                                          <div class="course__review-item d-flex align-items-center justify-content-between">
                                             <div class="course__review-text">
                                                <span>1 stars</span>
                                             </div>
                                             <div class="course__review-progress">
                                                <div class="single-progress" data-width="0%" style="width: 0%;"></div>
                                             </div>
                                             <div class="course__review-percent">
                                                <h5>0%</h5>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="course__comment mb-75">
                              <h3>2 Comments</h3>

                              <ul>
                                 <li>
                                    <div class="course__comment-box ">
                                       <div class="course__comment-thumb float-start">
                                          <img src="assets/img/testimonial/avata-lg-2.png" alt="">
                                       </div>
                                       <div class="course__comment-content">
                                          <div class="course__comment-wrapper ml-70 fix">
                                             <div class="course__comment-info float-start">
                                                <h4>Eleanor Fant</h4>
                                                <span>July 14, 2022</span>
                                             </div>
                                             <div class="course__comment-rating float-start float-sm-end">
                                                <ul>
                                                   <li><a href="#"> <i class="icon_star"></i> </a></li>
                                                   <li><a href="#"> <i class="icon_star"></i> </a></li>
                                                   <li><a href="#"> <i class="icon_star"></i> </a></li>
                                                   <li><a href="#"> <i class="icon_star"></i> </a></li>
                                                   <li><a href="#"> <i class="icon_star"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <div class="course__comment-text ml-70">
                                             <p>So I said lurgy dropped a clanger Jeffrey bugger cuppa gosh David blatant have it, standard A bit of how's your father my lady absolutely.</p>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="course__comment-box ">
                                       <div class="course__comment-thumb float-start">
                                          <img src="assets/img/testimonial/avata-lg-4.png" alt="">
                                       </div>
                                       <div class="course__comment-content">
                                          <div class="course__comment-wrapper ml-70 fix">
                                             <div class="course__comment-info float-start">
                                                <h4>Samrat Islam Tushar</h4>
                                                <span>July 17, 2022</span>
                                             </div>
                                             <div class="course__comment-rating float-start float-sm-end">
                                                <ul>
                                                   <li><a href="#"> <i class="icon_star"></i> </a></li>
                                                   <li><a href="#"> <i class="icon_star"></i> </a></li>
                                                   <li><a href="#"> <i class="icon_star"></i> </a></li>
                                                   <li><a href="#"> <i class="icon_star"></i> </a></li>
                                                   <li><a href="#" class="no-rating"> <i class="icon_star"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <div class="course__comment-text ml-70">
                                             <p>David blatant have it, standard A bit of how's your father my lady absolutely.</p>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                           <div class="course__form">
                              <h3>Write a Review</h3>
                              <div class="course__form-inner">
                                 <form action="#">
                                    <div class="row">
                                       <div class="col-xxl-6">
                                          <div class="course__form-input">
                                             <input type="text" placeholder="Your Name">
                                          </div>
                                       </div>
                                       <div class="col-xxl-6">
                                          <div class="course__form-input">
                                             <input type="email" placeholder="Your Email">
                                          </div>
                                       </div>
                                       <div class="col-xxl-12">
                                          <div class="course__form-input">
                                             <input type="text" placeholder="Review Title">
                                          </div>
                                       </div>
                                       <div class="col-xxl-12">
                                          <div class="course__form-input">
                                             <div class="course__form-rating">
                                                <span>Rating : </span>
                                                <ul>
                                                   <li><a href="#"> <i class="icon_star"></i> </a></li>
                                                   <li><a href="#"> <i class="icon_star"></i> </a></li>
                                                   <li><a href="#"> <i class="icon_star"></i> </a></li>
                                                   <li><a href="#" class="no-rating"> <i class="icon_star"></i> </a></li>
                                                   <li><a href="#" class="no-rating"> <i class="icon_star"></i> </a></li>
                                                </ul>
                                             </div>
                                             <textarea placeholder="Review Summary"></textarea>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-xxl-12">
                                          <div class="course__form-btn mt-10 mb-55">
                                             <button type="submit" class="tp-btn">
                                                <span>Submit Review<i class="fa-regular fa-arrow-right"></i> </span>
                                             </button>
                                          </div>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="member" role="tabpanel" aria-labelledby="member-tab">
                        <div class="course__member mb-45">
                           <div class="course__member-item">
                              <div class="row align-items-center">
                                 <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-6">
                                    <div class="course__member-thumb d-flex align-items-center">
                                       <img src="assets/img/testimonial/avata-lg-4.png" alt="">
                                       <div class="course__member-name ml-20">
                                          <h5>Samrat Islam Tushar</h5>
                                          <span>Engineer</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                                    <div class="course__member-info pl-45">
                                       <h5>07</h5>
                                       <span>Courses</span>
                                    </div>
                                 </div>
                                 <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                                    <div class="course__member-info pl-70">
                                       <h5>05</h5>
                                       <span>Reviw</span>
                                    </div>
                                 </div>
                                 <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                                    <div class="course__member-info pl-85">
                                       <h5>3.00</h5>
                                       <span>Rating</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="course__member-item">
                              <div class="row align-items-center">
                                 <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-6">
                                    <div class="course__member-thumb d-flex align-items-center">
                                       <img src="assets/img/testimonial/avata-lg-2.png" alt="">
                                       <div class="course__member-name ml-20">
                                          <h5>Lauren Stamps</h5>
                                          <span>Teacher</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                                    <div class="course__member-info pl-45">
                                       <h5>05</h5>
                                       <span>Courses</span>
                                    </div>
                                 </div>
                                 <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                                    <div class="course__member-info pl-70">
                                       <h5>03</h5>
                                       <span>Reviw</span>
                                    </div>
                                 </div>
                                 <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                                    <div class="course__member-info pl-85">
                                       <h5>3.00</h5>
                                       <span>Rating</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="course__member-item">
                              <div class="row align-items-center">
                                 <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-6 ">
                                    <div class="course__member-thumb d-flex align-items-center">
                                       <img src="assets/img/testimonial/avata-lg-3.png" alt="">
                                       <div class="course__member-name ml-20">
                                          <h5>Jonquil Von</h5>
                                          <span>Associate</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                                    <div class="course__member-info pl-45">
                                       <h5>09</h5>
                                       <span>Courses</span>
                                    </div>
                                 </div>
                                 <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                                    <div class="course__member-info pl-70">
                                       <h5>07</h5>
                                       <span>Reviw</span>
                                    </div>
                                 </div>
                                 <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                                    <div class="course__member-info pl-85">
                                       <h5>4.00</h5>
                                       <span>Rating</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
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
                              <a href="https://www.youtube.com/watch?v=nVIsH_F-Lmw" clas data-fancybox="" class="play-btn popup-video"> <i class="fas fa-play"></i> </a>
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
                                    <h5><span>Lectures :</span>14</h5>
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
                                    <h5><span>Enrolled :</span>20 students</h5>
                                 </div>
                              </li>
                              <li class="d-flex align-items-center">
                                 <div class="course__video-icon">
                                    <svg>
                                       <circle class="st0" cx="8" cy="8" r="6.7"/>
                                       <line class="st0" x1="1.3" y1="8" x2="14.7" y2="8"/>
                                       <path class="st0" d="M8,1.3c1.7,1.8,2.6,4.2,2.7,6.7c-0.1,2.5-1,4.8-2.7,6.7C6.3,12.8,5.4,10.5,5.3,8C5.4,5.5,6.3,3.2,8,1.3z"/>
                                    </svg>
                                 </div>
                                 <div class="course__video-info">
                                    <h5><span>Language :</span>English</h5>
                                 </div>
                              </li>
                           </ul>
                        </div>
                        <div class="course__enroll-btn p-relative z-index-1">
                           <a href="#" class="tp-btn w-100">
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
                                                <li><a href="#"> <i class="icon_star"></i> </a></li>
                                                <li><a href="#"> <i class="icon_star"></i> </a></li>
                                                <li><a href="#"> <i class="icon_star"></i> </a></li>
                                                <li><a href="#"> <i class="icon_star"></i> </a></li>
                                                <li><a href="#"> <i class="icon_star"></i> </a></li>
                                                4.5
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