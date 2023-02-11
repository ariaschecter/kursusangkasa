@extends('user.course_master')

@section('user')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div class="row">
    <div class="col-12">
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
                    <div class="col-12">
                        <div class="course-details__content">
                            <div class="embed-responsive embed-responsive-21by9">
                                <iframe class="embed-responsive-item rounded" src="https://www.youtube.com/embed/{{ $list_course->list_course_link }}" allowfullscreen></iframe>
                              </div>
                            <h2 class="courses-title m-2">{{ $list_course->list_course_name }}</h2>
                            <div class="courses-tag-btn mb-3">
                                <a href="{{ route('user.course.prev', [$course->course_slug, $list_course->list_course_slug]) }}" class="{{ $prev ? 'btn btn-primary' : '' }} col-md-2">{{ $prev ? 'Prev' : '' }}</a>
                                <a href="{{ route('user.course.next', [$course->course_slug, $list_course->list_course_slug]) }}" class="{{ $next ? 'btn btn-primary' : '' }} col-md-2" style="float: right">{{ $next ? 'Next' : '' }}</a>
                            </div>
                        </div>
                       <div class="course__tab-2 mb-45">
                        @include('template.teacher_overview')
                        @if(!$review)
                        <div class="course__form">
                            <h3>Write a Review</h3>
                            <div class="course__form-inner">
                                <form action="{{ route('user.review.store', $course->course_slug) }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xxl-12">
                                        <div class="course__form-input">
                                            <div class="course__form-rating">
                                                <span>Rating : </span>
                                                <input type="hidden" class="rating" name="review_star" data-filled="mdi mdi-star text-warning" data-empty="mdi mdi-star-outline text-muted"/>
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
                       </div>
                    </div>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

@endsection



