@extends('user.course_master')

@section('user')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="col-12 col-xl-9">
    <div class="nav">
        <div class="d-flex justify-content-between align-items-center w-100 mb-3 mb-md-0">
            <div class="d-flex justify-content-start align-items-center">
                <button id="toggle-navbar" onclick="toggleNavbar()">
                    <img src="./assets/img/global/burger.svg" class="mb-2" alt="">
                </button>
                <h2 class="nav-title">{{ $course->course_name }}</h2>
            </div>
            <button class="btn-notif d-block d-md-none"><img src="./assets/img/global/bell.svg" alt=""></button>
        </div>
    </div>

    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="course-details__meta d-sm-flex">
                   <div class="course__teacher-3 d-flex align-items-center mr-70 mb-30">
                      <div class="course__teacher-thumb-3 mr-15">
                         <img src="{{ asset('storage/' . $course->teacher->user->user_picture) }}" alt="">
                      </div>
                      <div class="course__teacher-info-3">
                         <h5>Teacher</h5>
                         <p><a href="{{ route('home.teacher.show', $course->teacher->user->username) }}">{{ $course->teacher->user->name }}</a></p>
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
                <div class="col-12">
                    <div class="course-details__content">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item rounded" src="https://www.youtube.com/embed/{{ $list_course->list_course_link }}" allowfullscreen></iframe>
                          </div>
                          {{-- https://youtu.be/KUPxoQnjFV4?list=LRYRK7HcSUz8jX9MaAkGilfO_3fz_RJ8XK1re --}}
                        {{-- <iframe   class="course__img w-img mb-30" allow="fullscreen"></iframe> --}}
                        <h2 class="courses-title mb-30">Title</h2>
                        <div class="courses-tag-btn mb-3">
                            <a href="{{ route('user.course.prev', [$course->course_slug, $list_course->list_course_slug]) }}" class="{{ $prev ? 'btn btn-primary' : '' }} col-md-2">{{ $prev ? 'Prev' : '' }}</a>
                            <a href="{{ route('user.course.next', [$course->course_slug, $list_course->list_course_slug]) }}" class="{{ $next ? 'btn btn-primary' : '' }} col-md-2" style="float: right">{{ $next ? 'Next' : '' }}</a>
                        </div>
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
                            @php
                                $i = 1;
                                $last_acces = $acces->course_acces_last;
                            @endphp
                             @foreach ($course->sub_course as $sub_course)
                             <div class="accordion" id="course__accordion-2">
                                 <div class="accordion-item mb-50">
                                     <h2 class="accordion-header" id="{{ $sub_course->id }}">
                                         <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $sub_course->sub_course_slug }}" aria-expanded="true" aria-controls="{{ $sub_course->sub_course_slug }}">
                                             {{ $sub_course->sub_course_name }}
                                         </button>
                                     </h2>

                                     <div id="{{ $sub_course->sub_course_slug }}" class="accordion-collapse collapse show" aria-labelledby="{{ $sub_course->id }}" data-bs-parent="#course__accordion-2">
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
                                                 <div class="course__curriculum-meta">
                                                     <span class="time"> <i class="{{ ($i > $last_acces) ? 'ri-lock-2-line' : ' ri-play-line' }}"></i></span>
                                                 </div>
                                             </div>
                                             @php
                                                 $i++;
                                             @endphp
                                         @endforeach

                                     </div>
                                     </div>
                                 </div>
                             </div>
                             @endforeach
                         </div>
                      </div>
                      <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                          @if(!$review)
                        <div class="course__form">
                            <h3>Write a Review</h3>
                            <div class="course__form-inner">
                                    <form action="{{ route('user.review.store',) }}" method="POST">
                                        @csrf
                                  <div class="row">
                                     <div class="col-xxl-12">
                                        <div class="course__form-input">
                                           <div class="course__form-rating">
                                             <span>Rating : </span>
                                             <input type="hidden" class="rating" name="review_star" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-muted"/>
                                             @error('review_star') <span class="text-danger"> {{ $message }}</span> @enderror
                                           </div>
                                           <textarea placeholder="Review Summary" name="review_feedback"></textarea>
                                           @error('review_feedback') <span class="text-danger"> {{ $message }}</span> @enderror
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
                         @endif
                        <div class="course__review">
                            <div class="course__comment mb-75">
                               <h3>{{ count($course->review) }} Comments</h3>
                               <ul>
                                    @foreach ($course->review as $reviewer)
                                    <li>
                                        <div class="course__comment-box ">
                                            <div class="course__comment-thumb float-start">
                                            <img src="{{ asset('storage/' . $reviewer->user->user_picture) }}" alt="">
                                            </div>
                                            <div class="course__comment-content">
                                            <div class="course__comment-wrapper ml-70 fix">
                                                <div class="course__comment-info float-start">
                                                    <h4>{{ $reviewer->user->name }}</h4>
                                                    <span>{{ \Carbon\Carbon::parse($reviewer->created_at)->diffForHumans() }}</span>
                                                </div>
                                                <div class="course__comment-rating float-start float-sm-end">
                                                    <ul>
                                                        @for($i = 0; $i < $reviewer->review_star; $i++)
                                                            <li><a href="#"> <i class="icon_star"></i> </a></li>
                                                        @endfor
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="course__comment-text ml-70">
                                                <p>{{ $reviewer->review_feedback }}</p>
                                            </div>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                               </ul>
                            </div>
                         </div>
                      </div>
                      <div class="tab-pane fade" id="member" role="tabpanel" aria-labelledby="member-tab">
                         <div class="course__member mb-45">
                            @php
                                $course_accesses = \App\Models\CourseAcces::where('course_id', $course->id)->get();
                            @endphp
                            @foreach ($course_accesses as $acces)
                            <div class="course__member-item">
                               <div class="row align-items-center">
                                  <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-6">
                                     <div class="course__member-thumb d-flex align-items-center">
                                        <img src="{{ asset('storage/' . $acces->user->user_picture) }}" alt="">
                                        <div class="course__member-name ml-20">
                                           <h5>{{ $acces->user->name }}</h5>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                                     <div class="course__member-info pl-45">
                                        <h5>{{ count($acces->user->course_acces) }}</h5>
                                        <span>Courses</span>
                                     </div>
                                  </div>
                                  <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                                     <div class="course__member-info pl-70">
                                        <h5>{{ count($acces->user->review) }}</h5>
                                        <span>Reviw</span>
                                     </div>
                                  </div>
                                  <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                                     <div class="course__member-info pl-85">
                                        <h5>{{ $acces->user->review->avg('review_star') }}</h5>
                                        <span>Rating</span>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            @endforeach


                         </div>
                      </div>
                    </div>
                </div>
             </div>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

@endsection



