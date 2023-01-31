@php
    if(isset($column)) {
        $col = $column;
    } else {
        $col = 'col-lg-4';
    }
@endphp
<div class="{{ $col }} col-md-6">
    <div class="tp-courses__item mb-30">
        <div class="tp-courses__thumb w-img fix p-relative">
            <img src="{{ asset('storage/' . $course->course_picture) }}" alt="">
            <span class="tp-courses__cat cat-color-1"><a href="{{ route('home.category.show', $course->category->category_slug) }}">{{ $course->category->category_name }}</a></span>
        </div>
        <div class="tp-courses__content white-bg">
            <div class="tp-courses__meta">
                <span class="tp-ratting"><i class="icon_star"></i> {{ round($course->review->avg('review_star'), 2) ?? 0 }} ({{ count($course->review) }})</span>
                <span><i class="fa-light fa-user"></i>{{ $course->course_enroll }}</span>
            </div>
            <h3 class="tp-courses__title"><a href="{{ route('home.course.show', $course->course_slug) }}">{{ $course->course_name }}</a></h3>
            <div class="tp-courses__avata">
                <img src="{{ asset('storage/' . $course->teacher->user->user_picture) }}" alt="">
                <span><a href="{{ route('home.teacher.show', $course->teacher->user->username) }}">{{ $course->teacher->user->name }}</a></span>
            </div>
            <div class="tp-courses__price d-flex justify-content-between">
                <div class="tp-courses__time">
                    <span><a href="{{ route('home.course.show', $course->course_slug) }}" class="more-btn">Read More <i class="fa-regular fa-arrow-right"></i></a></span>
                </div>
                <div class="tp-courses__value">
                    <span>Rp. {{ number_format($course->price_new, 0) }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
