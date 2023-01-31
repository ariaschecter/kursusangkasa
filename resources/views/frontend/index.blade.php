@extends('frontend.frontend_master')

@section('frontend')
<!-- hero section  -->
<div class="tp-hero__section pt-130 theme-bg p-relative fix">
    <div class="container">
       <div class="row">
          <div class="col-lg-7">
             <div class="tp-hero__content pt-200">
                <span class="tp-hero__subtitle text-white mb-10">Education Goal</span>
                <h3 class="tp-hero__title text-white mb-15">Free online courses
                   from the experts.</h3>
                <p class="text-white mb-45">Presenting Academy, the tech school of the future.</p>
                <div class="tp-hero__btn-wrappper d-md-flex align-items-center">
                   <div class="hero-btn-1 mr-20 p-relative z-index-1">
                      <a href="{{ route('home.course.index') }}" class="tp-btn br-0">
                         <span>Explore Coureses</span>
                         <div class="transition"></div>
                      </a>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-lg-5">
             <div class="tp-hero__img">
                <img src="{{ asset('storage/' . $setting->hero_image) }}" alt="hero">
             </div>
          </div>
       </div>
    </div>
    <div class="tp-hero__shapes">
       <div class="tp-hero__shapes-1">
          <img src="{{ asset('frontend/assets/img/icons/book-shape.png') }}" alt="">
       </div>
       <div class="tp-hero__shapes-2">
          <img src="{{ asset('frontend/assets/img/icons/circle-shape.png') }}" alt="">
       </div>
       <div class="tp-hero__shapes-3">
          <img src="{{ asset('frontend/assets/img/icons/dots-shapes.png') }}" alt="">
       </div>
       <div class="tp-hero__shapes-4">
          <img src="{{ asset('frontend/assets/img/icons/line-shape.png') }}" alt="">
       </div>
       <div class="tp-hero__shapes-5">
          <img src="{{ asset('frontend/assets/img/icons/lines-shape.png') }}" alt="">
       </div>
       <div class="tp-hero__shapes-6">
          <img src="{{ asset('frontend/assets/img/icons/role-shape.png') }}" alt="">
       </div>
    </div>
 </div>
 <!-- hero section end  -->


 <!-- brnad section start  -->
 <div class="tp-brand__section">
    <div class="container">
       <div class="row justify-content-center">
          <div class="col-lg-12">
             <div class="tp-brand__box white-bg pt-40">
                <div class="row">
                   <div class="col-xl-4 col-md-6">
                      <h3>Tutorgo</h3>
                      <p>Join over 1490+ partners around the world</p>
                   </div>
                   <div class="col-xl-4 col-md-6">
                    <div class="rating-star">
                        <input type="hidden" class="rating" data-filled="mdi mdi-star text-warning" data-empty="mdi mdi-star-outline text-muted" data-readonly value="{{ $all_reviews->avg('review_star') }}"/>
                    </div>
                      <p>{{ round($all_reviews->avg('review_star'), 2) }} Star Rating ({{ count($all_reviews) }}+ Review)</p>
                   </div>
                </div>
                <div class="row">
                   <div class="col-12">
                      <div class="tp-brand_slider">
                        <!-- Source -->
                        @foreach ($categories as $category)
                            <div class="tp-category__home">
                                <img src="{{ asset('storage/' . $category->category_picture) }}" alt="">
                                {{-- frontend/assets/img/courses/avata/course-avata-1.jpg --}}
                                <span class="h5"><a href="{{ route('home.category.show', $category->category_slug) }}">{{ $category->category_name }}</a></span>
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
 <!-- brnad section end  -->


 <!-- about section  start -->
 @include('frontend.template.benefit')
 <!-- about section end  -->

 <!-- course start  -->
 <div class="tp-courses__section grey-bg-2 pt-120 pb-90">
    <div class="container">
       <div class="row align-items-center">
          <div class="col-lg-6">
             <div class="tp-section__title-wrapper mb-40">
                <h3 class="tp-section__title mb-15">Our Popular Courses.</h3>
                <p>Lorem ipsum dolor sit amet, consectetur aliqua adipiscing
                   elit, sed do eiumod tempor.</p>
             </div>
          </div>
       </div>
       <div class="tp-courses__tab-content">
          <div class="tab-content" id="pills-tabContent">

             <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
                <div class="row">
                    @foreach ($popular as $course)
                        @include('frontend.template.course_card')
                    @endforeach
                </div>
             </div>

          </div>
       </div>
    </div>
 </div>
 <!-- course end  -->

 <!-- team start  -->
 <div class="tp-team__section pt-120 pb-90">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
               <div class="tp-section__title-wrapper mb-40">
                  <h3 class="tp-section__title mb-15">Our Latest Courses.</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur aliqua adipiscing
                     elit, sed do eiumod tempor.</p>
               </div>
            </div>
         </div>
       <div class="tp-team__wrapper mb-30">
          <div class="row">
             @foreach ($latest_course as $course)
                @include('frontend.template.course_card')
             @endforeach
          </div>
       </div>
    </div>
 </div>
 <!-- team end  -->

 <!-- youtube start  -->
 <div class="tp-team__section pt-120 pb-90">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
               <div class="tp-section__title-wrapper mb-40">
                  <h3 class="tp-section__title mb-15">Our Channel Youtube.</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur aliqua adipiscing
                     elit, sed do eiumod tempor.</p>
               </div>
            </div>
         </div>
       <div class="tp-team__wrapper mb-30">
          <div class="row">
             @foreach ($youtubes as $youtube)
                @include('frontend.template.youtube_card')
             @endforeach
          </div>
       </div>
    </div>
 </div>
 <!-- youtube end  -->

 <!-- testimonial start  -->
 @if(count($reviews) > 0)
    <div class="tp-testimonial__section pb-120">
        <div class="container">
            <div class="grey-bg pb-150 pt-60 tp-testimonial__bg">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tp-section__title-wrapper mb-40 text-center">
                        <h3 class="tp-section__title mb-15">What our clients Say <br>
                            About us</h3>
                        <p>Etiam Porttitor risus massa nec condiment gravida nibh.</p>
                        </div>
                    </div>
                </div>
                <div class="tp-testimonial__wrapper p-relative">
                    <div class="row justify-content-center">

                    <div class="col-lg-10">
                        <div class="tp-testimonial__slider">
                            @foreach ($reviews as $review)
                                <div class="tp-testimonial__box d-md-flex white-bg align-items-center">
                                    <img src="{{ asset('storage/' . $review->user->user_picture) }}" style="width: 270px" alt="">
                                    <div class="tp-testimonial__review">
                                    <span class="tp-testimonial__quote"><i class="fa-solid fa-quote-left"></i></span>
                                    <p>{{ $review->review_feedback }}</p>
                                    <h3>{{ $review->user->name }}</h3>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="tp-testimonial__dots pt-50"></div>
                    <div class="tp-testimonial__arrows"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
<!-- tesimoial end  -->

<!-- accordion-area-start -->
<div class="sd-accordio-area  pt-130 pb-130">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
               <div class="tp-section__title-wrapper mb-40">
                  <h3 class="tp-section__title mb-15">FAQ.</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur aliqua adipiscing
                     elit, sed do eiumod tempor.</p>
               </div>
            </div>
         </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="tp-custom-accordio">
                    <div class="accordion" id="faqsection">
                        @foreach ($faqs as $faq)
                            <div class="accordion-items">
                                <h2 class="accordion-header" id="heading{{ $faq->id }}">
                                    <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{ $faq->id }}" aria-expanded="false" aria-controls="collapse{{ $faq->id }}">
                                        {{ $faq->faq_title }}
                                    </button>
                                </h2>
                                <div id="collapse{{ $faq->id }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $faq->id }}"
                                    data-bs-parent="#faqsection">
                                    <div class="accordion-body">
                                        {{ $faq->faq_desc }}
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
<!-- accordion-area-end -->


@endsection
