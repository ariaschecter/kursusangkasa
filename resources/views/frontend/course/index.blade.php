@extends('frontend.frontend_master')

@section('frontend')
    <!-- breadcrumb area start -->
    <div class="breadcrumb__area include-bg pt-200 pb-150 breadcrumb__overlay"
    data-background="assets/img/breadcrumb/breadcrumb-bg-2.jpg">
    <div class="container">
       <div class="row">
          <div class="col-xxl-12">
             <div class="breadcrumb__content p-relative z-index-1">
                <h3 class="breadcrumb__title">Courses</h3>
                <div class="breadcrumb__list">
                   <span><a href="#">Home</a></span>
                   <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                   <span>courses</span>
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
       <div class="course__tab-inner grey-bg-2 mb-50">
          <div class="row align-items-center">
             <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <div class="course__tab-wrapper d-flex align-items-center">
                   <div class="course__tab-btn">
                      <ul class="nav nav-tabs" id="courseTab" role="tablist">
                         <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="grid-tab" data-bs-toggle="tab"
                               data-bs-target="#grid" type="button" role="tab" aria-controls="grid"
                               aria-selected="true">
                               <svg class="grid" viewBox="0 0 24 24">
                                  <rect x="3" y="3" class="st0" width="7" height="7" />
                                  <rect x="14" y="3" class="st0" width="7" height="7" />
                                  <rect x="14" y="14" class="st0" width="7" height="7" />
                                  <rect x="3" y="14" class="st0" width="7" height="7" />
                               </svg>
                            </button>
                         </li>
                         <li class="nav-item" role="presentation">
                            <button class="nav-link list" id="list-tab" data-bs-toggle="tab" data-bs-target="#list"
                               type="button" role="tab" aria-controls="list" aria-selected="false">
                               <svg class="list" viewBox="0 0 512 512">
                                  <g id="Layer_2_1_">
                                     <path class="st0"
                                        d="M448,69H192c-17.7,0-32,13.9-32,31s14.3,31,32,31h256c17.7,0,32-13.9,32-31S465.7,69,448,69z" />
                                     <circle class="st0" cx="64" cy="100" r="31" />
                                     <path class="st0"
                                        d="M448,225H192c-17.7,0-32,13.9-32,31s14.3,31,32,31h256c17.7,0,32-13.9,32-31S465.7,225,448,225z" />
                                     <circle class="st0" cx="64" cy="256" r="31" />
                                     <path class="st0"
                                        d="M448,381H192c-17.7,0-32,13.9-32,31s14.3,31,32,31h256c17.7,0,32-13.9,32-31S465.7,381,448,381z" />
                                     <circle class="st0" cx="64" cy="412" r="31" />
                                  </g>
                               </svg>
                            </button>
                         </li>
                      </ul>
                   </div>
                </div>
             </div>
          </div>
       </div>
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
                                    <div class="col-lg-4 col-md-6">
                                        <div class="tp-courses__item mb-30">
                                            <div class="tp-courses__thumb w-img fix p-relative">
                                                <img src="{{ $course->course_picture }}" alt="">
                                                <span class="tp-courses__cat cat-color-1"><a href="{{ route('home.category.show', $course->category->category_slug) }}">{{ $course->category->category_name }}</a></span>
                                            </div>
                                            <div class="tp-courses__content white-bg">
                                                <div class="tp-courses__meta">
                                                    <span><i class="fa-light fa-user"></i>{{ $course->course_enroll }}</span>
                                                </div>
                                                <h3 class="tp-courses__title"><a href="{{ route('home.course.show', $course->course_slug) }}">{{ $course->course_name }}</a></h3>
                                                <div class="tp-courses__avata">
                                                    <img src="{{ asset('storage/' . $course->teacher->user->user_picture) }}" alt="">
                                                    {{-- frontend/assets/img/courses/avata/course-avata-1.jpg --}}
                                                    <span><a href="{{ route('home.teacher.show', $course->teacher->user->username) }}">{{ $course->teacher->user->name }}</a></span>
                                                </div>
                                                <div class="tp-courses__price d-flex justify-content-between">
                                                    <div class="tp-courses__time">
                                                        <span><a href="{{ route('home.course.show', $course->course_slug) }}" class="more-btn">Read More <i class="fa-regular fa-arrow-right"></i></a></span>
                                                    </div>
                                                    <div class="tp-courses__value">
                                                        <span>Rp. {{ number_format($course->course_price, 0) }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                         </div>
                      </div>
                      <!-- course end  -->
                   </div>
                   <div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="list-tab">
                      <div class="row">
                         <div class="col-xxl-12">

                            <div class="tp-courses-4__item white-bg mb-30  fix">
                               <div class="row gx-0">
                                  <div class="col-xxl-4 col-xl-4 col-lg-4">
                                     <div class="tp-courses-4__thumb w-img fix p-relative">
                                        <a href="course-details.html">
                                           <img src="assets/img/courses/courses-list-1.jpg" alt="">
                                        </a>
                                        <span class="tp-courses__cat cat-color-1"><a href="#">Web
                                              Design</a></span>
                                     </div>
                                  </div>
                                  <div class="col-xxl-8 col-xl-8 col-lg-8">
                                     <div class="tp-courses-4__content-wrapper">
                                        <div class="tp-courses-4__content">
                                           <div class="tp-courses-4__meta">
                                              <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5
                                                 (100)</span>
                                              <span><i class="icon_heart_alt"></i>18,400</span>
                                              <span><i class="fa-light fa-user"></i>365</span>
                                           </div>
                                           <h3 class="tp-courses-4__title">
                                              <a href="course-details.html">Become a product Manager learn the
                                                 skills & job.</a>
                                           </h3>
                                           <div class="tp-courses-4__summary mb-25">
                                              <p>Communia virtutes tutiorem declarat stoicorum sanabat oblivisci
                                                 nostris tamquam iucunditatem</p>
                                           </div>
                                           <div class="tp-courses-4__avata">
                                              <img src="assets/img/courses/avata/course-avata-3.jpg" alt="">
                                              <span><a href="#">Ingredia Nutrisha</a></span>
                                           </div>
                                        </div>
                                        <div class="tp-courses-4__price d-flex justify-content-between">
                                           <div class="tp-courses-4__value">
                                              <span>$59.65</span>
                                           </div>
                                           <div class="tp-courses__time">
                                             <span><a href="course-details.html" class="more-btn">More Details<i
                                                       class="fa-regular fa-arrow-right"></i></a></span>
                                           </div>

                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="tp-courses-4__item white-bg mb-30 fix">
                               <div class="row gx-0">
                                  <div class="col-xxl-4 col-xl-4 col-lg-4">
                                     <div class="tp-courses-4__thumb w-img fix p-relative">
                                        <a href="course-details.html">
                                           <img src="assets/img/courses/courses-list-2.jpg" alt="">
                                        </a>
                                        <span class="tp-courses__cat cat-color-2"><a href="#">Web
                                              Dev</a></span>
                                     </div>
                                  </div>
                                  <div class="col-xxl-8 col-xl-8 col-lg-8">
                                     <div class="tp-courses-4__content-wrapper">
                                        <div class="tp-courses-4__content">
                                           <div class="tp-courses-4__meta">
                                              <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5
                                                 (100)</span>
                                              <span><i class="icon_heart_alt"></i>18,400</span>
                                              <span><i class="fa-light fa-user"></i>365</span>
                                           </div>
                                           <h3 class="tp-courses-4__title">
                                              <a href="course-details.html">The Most Complete Web Dev- Thinking Course</a>
                                           </h3>
                                           <div class="tp-courses-4__summary mb-25">
                                              <p>Communia virtutes tutiorem declarat stoicorum sanabat oblivisci
                                                 nostris tamquam iucunditatem</p>
                                           </div>
                                           <div class="tp-courses-4__avata">
                                              <img src="assets/img/courses/avata/course-avata-3.jpg" alt="">
                                              <span><a href="#">Ingredia Nutrisha</a></span>
                                           </div>
                                        </div>
                                        <div class="tp-courses-4__price d-flex justify-content-between">
                                           <div class="tp-courses-4__value">
                                              <span>$39.65</span>
                                           </div>
                                           <div class="tp-courses__time">
                                             <span><a href="course-details.html" class="more-btn">More Details<i
                                                       class="fa-regular fa-arrow-right"></i></a></span>
                                           </div>

                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="tp-courses-4__item white-bg mb-30 fix">
                               <div class="row gx-0">
                                  <div class="col-xxl-4 col-xl-4 col-lg-4">
                                     <div class="tp-courses-4__thumb w-img fix p-relative">
                                        <a href="course-details.html">
                                           <img src="assets/img/courses/courses-list-3.jpg" alt="">
                                        </a>
                                        <span class="tp-courses__cat cat-color-3"><a href="#">Product Manager</a></span>
                                     </div>
                                  </div>
                                  <div class="col-xxl-8 col-xl-8 col-lg-8">
                                     <div class="tp-courses-4__content-wrapper">
                                        <div class="tp-courses-4__content">
                                           <div class="tp-courses-4__meta">
                                              <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5
                                                 (100)</span>
                                              <span><i class="icon_heart_alt"></i>18,400</span>
                                              <span><i class="fa-light fa-user"></i>365</span>
                                           </div>
                                           <h3 class="tp-courses-4__title">
                                              <a href="course-details.html">Product Manager learn the
                                                 skills & job online 2022</a>
                                           </h3>
                                           <div class="tp-courses-4__summary mb-25">
                                              <p>Communia virtutes tutiorem declarat stoicorum sanabat oblivisci
                                                 nostris tamquam iucunditatem</p>
                                           </div>
                                           <div class="tp-courses-4__avata">
                                              <img src="assets/img/courses/avata/course-avata-3.jpg" alt="">
                                              <span><a href="#">Ingredia Nutrisha</a></span>
                                           </div>
                                        </div>
                                        <div class="tp-courses-4__price d-flex justify-content-between">
                                           <div class="tp-courses-4__value">
                                              <span>Free</span>
                                           </div>
                                           <div class="tp-courses__time">
                                             <span><a href="course-details.html" class="more-btn">More Details<i
                                                       class="fa-regular fa-arrow-right"></i></a></span>
                                           </div>

                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="tp-courses-4__item white-bg mb-30 fix">
                               <div class="row gx-0">
                                  <div class="col-xxl-4 col-xl-4 col-lg-4">
                                     <div class="tp-courses-4__thumb w-img fix p-relative">
                                        <a href="course-details.html">
                                           <img src="assets/img/courses/courses-list-4.jpg" alt="">
                                        </a>
                                        <span class="tp-courses__cat cat-color-4"><a href="#">Fashion</a></span>
                                     </div>
                                  </div>
                                  <div class="col-xxl-8 col-xl-8 col-lg-8">
                                     <div class="tp-courses-4__content-wrapper">
                                        <div class="tp-courses-4__content">
                                           <div class="tp-courses-4__meta">
                                              <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5
                                                 (100)</span>
                                              <span><i class="icon_heart_alt"></i>18,400</span>
                                              <span><i class="fa-light fa-user"></i>365</span>
                                           </div>
                                           <h3 class="tp-courses-4__title">
                                              <a href="course-details.html">Fashion and Luxury Fashion in a Changing</a>
                                           </h3>
                                           <div class="tp-courses-4__summary mb-25">
                                              <p>Communia virtutes tutiorem declarat stoicorum sanabat oblivisci
                                                 nostris tamquam iucunditatem</p>
                                           </div>
                                           <div class="tp-courses-4__avata">
                                              <img src="assets/img/courses/avata/course-avata-3.jpg" alt="">
                                              <span><a href="#">Ingredia Nutrisha</a></span>
                                           </div>
                                        </div>
                                        <div class="tp-courses-4__price d-flex justify-content-between">
                                           <div class="tp-courses-4__value">
                                              <span>$49.65</span>
                                           </div>
                                           <div class="tp-courses__time">
                                             <span><a href="course-details.html" class="more-btn">More Details<i
                                                       class="fa-regular fa-arrow-right"></i></a></span>
                                           </div>

                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="tp-courses-4__item white-bg mb-30 fix">
                               <div class="row gx-0">
                                  <div class="col-xxl-4 col-xl-4 col-lg-4">
                                     <div class="tp-courses-4__thumb w-img fix p-relative">
                                        <a href="course-details.html">
                                           <img src="assets/img/courses/courses-list-5.jpg" alt="">
                                        </a>
                                        <span class="tp-courses__cat cat-color-5"><a href="#">Creative</a></span>
                                     </div>
                                  </div>
                                  <div class="col-xxl-8 col-xl-8 col-lg-8">
                                     <div class="tp-courses-4__content-wrapper">
                                        <div class="tp-courses-4__content">
                                           <div class="tp-courses-4__meta">
                                              <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5
                                                 (100)</span>
                                              <span><i class="icon_heart_alt"></i>18,400</span>
                                              <span><i class="fa-light fa-user"></i>365</span>
                                           </div>
                                           <h3 class="tp-courses-4__title">
                                              <a href="course-details.html">Creative writing through Storytelling Course</a>
                                           </h3>
                                           <div class="tp-courses-4__summary mb-25">
                                              <p>Communia virtutes tutiorem declarat stoicorum sanabat oblivisci
                                                 nostris tamquam iucunditatem</p>
                                           </div>
                                           <div class="tp-courses-4__avata">
                                              <img src="assets/img/courses/avata/course-avata-3.jpg" alt="">
                                              <span><a href="#">Ingredia Nutrisha</a></span>
                                           </div>
                                        </div>
                                        <div class="tp-courses-4__price d-flex justify-content-between">
                                           <div class="tp-courses-4__value">
                                              <span>$59.65</span>
                                           </div>
                                           <div class="tp-courses__time">
                                             <span><a href="course-details.html" class="more-btn">More Details<i
                                                       class="fa-regular fa-arrow-right"></i></a></span>
                                           </div>

                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-xxl-12">
             <div class="basic-pagination">
                <nav>
                   <ul>
                      <li>
                         <a href="#">
                            <i class="far fa-angle-left"></i>
                         </a>
                      </li>
                      <li>
                         <a href="#">1</a>
                      </li>
                      <li>
                         <span class="current">2</span>
                      </li>
                      <li>
                         <a href="#">3</a>
                      </li>
                      <li>
                         <a href="#">
                            <i class="far fa-angle-right"></i>
                         </a>
                      </li>
                   </ul>
                 </nav>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- course area end -->
@endsection
