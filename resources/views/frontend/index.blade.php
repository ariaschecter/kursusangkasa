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
                      <a href="course.html" class="tp-btn br-0">
                         <span>Explore Coureses</span>
                         <div class="transition"></div>
                      </a>
                   </div>
                   <div class="hero-btn-2">
                      <a href="https://www.youtube.com/watch?v=vQD4YAgc7PE"
                         class="tp-play-btn d-flex align-items-center popup-video">

                         <i class="arrow_triangle-right"></i>
                         <span>Watch it Now</span>
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
                      <span>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fal fa-star"></i>
                      </span>
                      <p>4.5 Star Rating (20+ Review)</p>
                   </div>
                </div>
                <div class="row">
                   <div class="col-12">
                      <div class="tp-brand_slider">
                         <div class="tp-brand__item">
                            <img src="{{ asset('frontend/assets/img/brand/brand-1.png') }}" alt="">
                         </div>
                         <div class="tp-brand__item">
                            <img src="{{ asset('frontend/assets/img/brand/brand-2.png') }}" alt="">
                         </div>
                         <div class="tp-brand__item">
                            <img src="{{ asset('frontend/assets/img/brand/brand-3.png') }}" alt="">
                         </div>
                         <div class="tp-brand__item">
                            <img src="{{ asset('frontend/assets/img/brand/brand-4.png') }}" alt="">
                         </div>
                         <div class="tp-brand__item">
                            <img src="{{ asset('frontend/assets/img/brand/brand-5.png') }}" alt="">
                         </div>
                         <div class="tp-brand__item">
                            <img src="{{ asset('frontend/assets/img/brand/brand-6.png') }}" alt="">
                         </div>
                         <div class="tp-brand__item">
                            <img src="{{ asset('frontend/assets/img/brand/brand-2.png') }}" alt="">
                         </div>

                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- brnad section end  -->

 <!-- service area start  -->
 <div class="tp-feature__section pt-120 pb-30">
    <div class="container">
       <div class="row">
          <div class="col-12">
             <div class="tp-section__title-wrapper text-center mb-40">
                <h3 class="tp-section__title">Popular Topic, Which are Most <br> Favourite To Students</h3>
             </div>
          </div>
       </div>
       <div class="row gx-70">
          <div class="col-lg-3 col-md-4">
             <div class="tp-feature__item before-color-1 mb-30">
                <div class="tp-feature__icon">
                   <img src="assets/img/icons/design-icon.png" alt="">
                </div>
                <h3 class="tp-feature__title"><a href="course.html">Design</a></h3>
                <p>400+ Course</p>
             </div>
          </div>
          <div class="col-lg-3 col-md-4">
             <div class="tp-feature__item before-color-2 mb-40">
                <div class="tp-feature__icon">
                   <img src="assets/img/icons/man-cions.png" alt="">
                </div>
                <h3 class="tp-feature__title"><a href="course.html">Management</a> </h3>
                <p>400+ Course</p>
             </div>
          </div>
          <div class="col-lg-3 col-md-4">
             <div class="tp-feature__item before-color-3 mb-40">
                <div class="tp-feature__icon">
                   <img src="assets/img/icons/code-cions.png" alt="">
                </div>
                <h3 class="tp-feature__title"><a href="course.html">Programming</a></h3>
                <p>400+ Course</p>
             </div>
          </div>
          <div class="col-lg-3 col-md-4">
             <div class="tp-feature__item before-color-4 mb-40">
                <div class="tp-feature__icon">
                   <img src="assets/img/icons/bag-icon.png" alt="">
                </div>
                <h3 class="tp-feature__title"><a href="course.html">Business</a></h3>
                <p>400+ Course</p>
             </div>
          </div>
          <div class="col-lg-3 col-md-4">
             <div class="tp-feature__item before-color-5 mb-40">
                <div class="tp-feature__icon">
                   <img src="assets/img/icons/music-icons.png" alt="">
                </div>
                <h3 class="tp-feature__title"><a href="course.html"> Audio + Music</a></h3>
                <p>400+ Course</p>
             </div>
          </div>
          <div class="col-lg-3 col-md-4">
             <div class="tp-feature__item before-color-6 mb-40">
                <div class="tp-feature__icon">
                   <img src="assets/img/icons/doller-icon.png" alt="">
                </div>
                <h3 class="tp-feature__title"><a href="course.html">Finance</a></h3>
                <p>400+ Course</p>
             </div>
          </div>
          <div class="col-lg-3 col-md-4">
             <div class="tp-feature__item before-color-7 mb-40">
                <div class="tp-feature__icon">
                   <img src="assets/img/icons/cal-icon.png" alt="">
                </div>
                <h3 class="tp-feature__title"><a href="course.html">Accounting</a> </h3>
                <p>400+ Course</p>
             </div>
          </div>
          <div class="col-lg-3 col-md-4">
             <div class="tp-feature__item before-color-8 mb-40">
                <div class="tp-feature__icon">
                   <img src="assets/img/icons/pen-icon.png" alt="">
                </div>
                <h3 class="tp-feature__title"><a href="course.html">Content Writing</a></h3>
                <p>400+ Course</p>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- service area end  -->

 <!-- about section  start -->
 <div class="tp-about__section pt-120 pb-90">
    <div class="container">
       <div class="row align-items-center">
          <div class="col-lg-7">
             <div class="tp-about__img-wrapper d-md-flex p-relative">
                <div class="tp-about__img-large w-img mb-30">
                   <img src="assets/img/about/about-1.jpg" alt="">
                </div>
                <div class="tp-about__img-sm w-img mb-30">
                   <img src="assets/img/about/about-2.jpg" alt="">
                </div>

                <div class="tp-about-shapes">
                   <div class="tp-about__shapes-1">
                      <img src="assets/img/icons/about-shapes.png" alt="">
                      <div class="tp-about__shapes-2 ">
                         <img src="assets/img/icons/ring-shape.png" alt="">
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-lg-5">
             <div class="tp-section__title-wrapper">
                <h3 class="tp-section__title mb-15">Benefit From Our <br>
                   Online Learning Experties
                   Earn professional.</h3>
                <p class="mb-40">Lorem ipsum dolor sit amet, consectetur aliqua adipiscing
                   elit, sed do eiumod tempor.</p>

                <div class="tp-about__feature-list mb-40">
                   <ul>
                      <li><span><i class="icon_check"></i></span>Upskill your organization.</li>
                      <li><span><i class="icon_check"></i></span>Access more then 100K online courses</li>
                      <li><span><i class="icon_check"></i></span>Access more then 1M online Video</li>
                   </ul>
                </div>
                <div class="tp-hero__btn-wrappper">
                   <a href="about-us.html" class="tp-border-btn br-0">
                      <span>Get Started</span>
                      <div class="transition"></div>
                   </a>
                </div>
             </div>
          </div>

       </div>

    </div>
 </div>
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
          <div class="col-lg-6">
             <div class="tp-courses__buttons d-flex justify-content-lg-end mb-60">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                   <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill"
                         data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all"
                         aria-selected="true">All</button>
                   </li>
                   <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-design-tab" data-bs-toggle="pill"
                         data-bs-target="#pills-design" type="button" role="tab" aria-controls="pills-design"
                         aria-selected="false">Popularity</button>
                   </li>
                   <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-popularity-tab" data-bs-toggle="pill"
                         data-bs-target="#pills-popularity" type="button" role="tab"
                         aria-controls="pills-popularity" aria-selected="false">Design</button>
                   </li>
                   <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-featured-tab" data-bs-toggle="pill"
                         data-bs-target="#pills-featured" type="button" role="tab" aria-controls="pills-featured"
                         aria-selected="false">Featured</button>
                   </li>
                </ul>
             </div>
          </div>
       </div>
       <div class="tp-courses__tab-content">
          <div class="tab-content" id="pills-tabContent">


             <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
                <div class="row">
                   <div class="col-lg-4 col-md-6">
                      <div class="tp-courses__item mb-30">
                         <div class="tp-courses__thumb w-img fix p-relative">
                            <img src="assets/img/courses/courses-2.jpg" alt="">
                            <span class="tp-courses__cat cat-color-2"><a href="#">Development</a></span>
                         </div>
                         <div class="tp-courses__content">
                            <div class="tp-courses__meta">
                               <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5 (100)</span>
                               <span><i class="icon_heart_alt"></i>1800</span>
                               <span><i class="fa-light fa-user"></i>325</span>
                            </div>
                            <h3 class="tp-courses__title"><a href="course-details.html">Everything You Need to Know
                                  About Business.</a></h3>
                            <div class="tp-courses__avata">
                               <img src="assets/img/courses/avata/course-avata-2.jpg" alt="">
                               <span><a href="#">David Bruse</a></span>
                            </div>
                            <div class="tp-courses__price d-flex justify-content-between">
                               <div class="tp-courses__time">
                                  <span><i class="fa-light fa-clock"></i>16 Week</span>
                               </div>
                               <div class="tp-courses__value">
                                  <span>$49.65</span>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>

                   <div class="col-lg-4 col-md-6">
                      <div class="tp-courses__item mb-30">
                         <div class="tp-courses__thumb w-img fix p-relative">
                            <img src="assets/img/courses/courses-1.jpg" alt="">
                            <span class="tp-courses__cat cat-color-1"><a href="#">Web Design</a></span>
                         </div>
                         <div class="tp-courses__content">
                            <div class="tp-courses__meta">
                               <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5 (110)</span>
                               <span><i class="icon_heart_alt"></i>1200</span>
                               <span><i class="fa-light fa-user"></i>155</span>
                            </div>
                            <h3 class="tp-courses__title"><a href="course-details.html">The Most Complete Design-
                                  Thinking Course</a></h3>
                            <div class="tp-courses__avata">
                               <img src="assets/img/courses/avata/course-avata-1.jpg" alt="">
                               <span><a href="#">Jennifer Powell</a></span>
                            </div>
                            <div class="tp-courses__price d-flex justify-content-between">
                               <div class="tp-courses__time">
                                  <span><i class="fa-light fa-clock"></i>7 Week</span>
                               </div>
                               <div class="tp-courses__value">
                                  <span>$39.65</span>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-4 col-md-6">
                      <div class="tp-courses__item mb-30">
                         <div class="tp-courses__thumb w-img fix p-relative">
                            <img src="assets/img/courses/courses-4.jpg" alt="">
                            <span class="tp-courses__cat cat-color-4"><a href="#">Art & Design</a></span>
                         </div>
                         <div class="tp-courses__content">
                            <div class="tp-courses__meta">
                               <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5 (60)</span>
                               <span><i class="icon_heart_alt"></i>400</span>
                               <span><i class="fa-light fa-user"></i>135</span>
                            </div>
                            <h3 class="tp-courses__title"><a href="course-details.html">AWS Certified Solutions Architect
                                  Associate.</a></h3>
                            <div class="tp-courses__avata">
                               <img src="assets/img/courses/avata/course-avata-4.jpg" alt="">
                               <span><a href="#">Peter Sidle</a></span>
                            </div>
                            <div class="tp-courses__price d-flex justify-content-between">
                               <div class="tp-courses__time">
                                  <span><i class="fa-light fa-clock"></i>14 Week</span>
                               </div>
                               <div class="tp-courses__value">
                                  <span>Free</span>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-4 col-md-6">
                      <div class="tp-courses__item mb-30">
                         <div class="tp-courses__thumb w-img fix p-relative">
                            <img src="assets/img/courses/courses-3.jpg" alt="">
                            <span class="tp-courses__cat cat-color-3"><a href="#">Mechanical</a></span>
                         </div>
                         <div class="tp-courses__content">
                            <div class="tp-courses__meta">
                               <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5 (88)</span>
                               <span><i class="icon_heart_alt"></i>200</span>
                               <span><i class="fa-light fa-user"></i>165</span>
                            </div>
                            <h3 class="tp-courses__title"><a href="course-details.html">Statistics Data Scince and
                                  Business Analysis</a></h3>
                            <div class="tp-courses__avata">
                               <img src="assets/img/courses/avata/course-avata-3.jpg" alt="">
                               <span><a href="#">Natasha Pawel</a></span>
                            </div>
                            <div class="tp-courses__price d-flex justify-content-between">
                               <div class="tp-courses__time">
                                  <span><i class="fa-light fa-clock"></i>10 Week</span>
                               </div>
                               <div class="tp-courses__value">
                                  <span>$69.65</span>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>

                   <div class="col-lg-4 col-md-6">
                      <div class="tp-courses__item mb-30">
                         <div class="tp-courses__thumb w-img fix p-relative">
                            <img src="assets/img/courses/courses-5.jpg" alt="">
                            <span class="tp-courses__cat cat-color-5"><a href="#">Marketing</a></span>
                         </div>
                         <div class="tp-courses__content">
                            <div class="tp-courses__meta">
                               <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5 (100)</span>
                               <span><i class="icon_heart_alt"></i>800</span>
                               <span><i class="fa-light fa-user"></i>365</span>
                            </div>
                            <h3 class="tp-courses__title"><a href="course-details.html">Learn Essentials of User Interface
                                  Design in Figma.</a></h3>
                            <div class="tp-courses__avata">
                               <img src="assets/img/courses/avata/course-avata-5.jpg" alt="">
                               <span><a href="#">Mary Vaun</a></span>
                            </div>
                            <div class="tp-courses__price d-flex justify-content-between">
                               <div class="tp-courses__time">
                                  <span><i class="fa-light fa-clock"></i>16 Week</span>
                               </div>
                               <div class="tp-courses__value">
                                  <span>Free</span>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>


                   <div class="col-lg-4 col-md-6">
                      <div class="tp-courses__item mb-30">
                         <div class="tp-courses__thumb w-img fix p-relative">
                            <img src="assets/img/courses/courses-6.jpg" alt="">
                            <span class="tp-courses__cat cat-color-6"><a href="#">Audio & Music</a></span>
                         </div>
                         <div class="tp-courses__content">
                            <div class="tp-courses__meta">
                               <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5 (100)</span>
                               <span><i class="icon_heart_alt"></i>18,400</span>
                               <span><i class="fa-light fa-user"></i>365</span>
                            </div>
                            <h3 class="tp-courses__title"><a href="course-details.html">Become a UI/UX Designer
                                  Everything You need</a></h3>
                            <div class="tp-courses__avata">
                               <img src="assets/img/courses/avata/course-avata-6.jpg" alt="">
                               <span><a href="#">Auston Ager</a></span>
                            </div>
                            <div class="tp-courses__price d-flex justify-content-between">
                               <div class="tp-courses__time">
                                  <span><i class="fa-light fa-clock"></i>10 Week</span>
                               </div>
                               <div class="tp-courses__value">
                                  <span>$59.65</span>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="tab-pane fade" id="pills-design" role="tabpanel" aria-labelledby="pills-design-tab">
                <div class="row">
                   <div class="col-lg-4 col-md-6">
                      <div class="tp-courses__item mb-30">
                         <div class="tp-courses__thumb w-img fix p-relative">
                            <img src="assets/img/courses/courses-4.jpg" alt="">
                            <span class="tp-courses__cat cat-color-4"><a href="#">Art & Design</a></span>
                         </div>
                         <div class="tp-courses__content">
                            <div class="tp-courses__meta">
                               <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5 (60)</span>
                               <span><i class="icon_heart_alt"></i>400</span>
                               <span><i class="fa-light fa-user"></i>135</span>
                            </div>
                            <h3 class="tp-courses__title"><a href="course-details.html">AWS Certified Solutions Architect
                                  Associate.</a></h3>
                            <div class="tp-courses__avata">
                               <img src="assets/img/courses/avata/course-avata-4.jpg" alt="">
                               <span><a href="#">Peter Sidle</a></span>
                            </div>
                            <div class="tp-courses__price d-flex justify-content-between">
                               <div class="tp-courses__time">
                                  <span><i class="fa-light fa-clock"></i>14 Week</span>
                               </div>
                               <div class="tp-courses__value">
                                  <span>Free</span>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-4 col-md-6">
                      <div class="tp-courses__item mb-30">
                         <div class="tp-courses__thumb w-img fix p-relative">
                            <img src="assets/img/courses/courses-5.jpg" alt="">
                            <span class="tp-courses__cat cat-color-5"><a href="#">Marketing</a></span>
                         </div>
                         <div class="tp-courses__content">
                            <div class="tp-courses__meta">
                               <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5 (100)</span>
                               <span><i class="icon_heart_alt"></i>800</span>
                               <span><i class="fa-light fa-user"></i>365</span>
                            </div>
                            <h3 class="tp-courses__title"><a href="course-details.html">Learn Essentials of User Interface
                                  Design in Figma.</a></h3>
                            <div class="tp-courses__avata">
                               <img src="assets/img/courses/avata/course-avata-5.jpg" alt="">
                               <span><a href="#">Mary Vaun</a></span>
                            </div>
                            <div class="tp-courses__price d-flex justify-content-between">
                               <div class="tp-courses__time">
                                  <span><i class="fa-light fa-clock"></i>16 Week</span>
                               </div>
                               <div class="tp-courses__value">
                                  <span>Free</span>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-4 col-md-6">
                      <div class="tp-courses__item mb-30">
                         <div class="tp-courses__thumb w-img fix p-relative">
                            <img src="assets/img/courses/courses-3.jpg" alt="">
                            <span class="tp-courses__cat cat-color-3"><a href="#">Mechanical</a></span>
                         </div>
                         <div class="tp-courses__content">
                            <div class="tp-courses__meta">
                               <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5 (88)</span>
                               <span><i class="icon_heart_alt"></i>200</span>
                               <span><i class="fa-light fa-user"></i>165</span>
                            </div>
                            <h3 class="tp-courses__title"><a href="course-details.html">Statistics Data Scince and
                                  Business Analysis</a></h3>
                            <div class="tp-courses__avata">
                               <img src="assets/img/courses/avata/course-avata-3.jpg" alt="">
                               <span><a href="#">Natasha Pawel</a></span>
                            </div>
                            <div class="tp-courses__price d-flex justify-content-between">
                               <div class="tp-courses__time">
                                  <span><i class="fa-light fa-clock"></i>10 Week</span>
                               </div>
                               <div class="tp-courses__value">
                                  <span>$69.65</span>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-4 col-md-6">
                      <div class="tp-courses__item mb-30">
                         <div class="tp-courses__thumb w-img fix p-relative">
                            <img src="assets/img/courses/courses-2.jpg" alt="">
                            <span class="tp-courses__cat cat-color-2"><a href="#">Development</a></span>
                         </div>
                         <div class="tp-courses__content">
                            <div class="tp-courses__meta">
                               <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5 (100)</span>
                               <span><i class="icon_heart_alt"></i>1800</span>
                               <span><i class="fa-light fa-user"></i>325</span>
                            </div>
                            <h3 class="tp-courses__title"><a href="course-details.html">Everything You Need to Know
                                  About Business.</a></h3>
                            <div class="tp-courses__avata">
                               <img src="assets/img/courses/avata/course-avata-2.jpg" alt="">
                               <span><a href="#">David Bruse</a></span>
                            </div>
                            <div class="tp-courses__price d-flex justify-content-between">
                               <div class="tp-courses__time">
                                  <span><i class="fa-light fa-clock"></i>16 Week</span>
                               </div>
                               <div class="tp-courses__value">
                                  <span>$49.65</span>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-4 col-md-6">
                      <div class="tp-courses__item mb-30">
                         <div class="tp-courses__thumb w-img fix p-relative">
                            <img src="assets/img/courses/courses-1.jpg" alt="">
                            <span class="tp-courses__cat cat-color-1"><a href="#">Web Design</a></span>
                         </div>
                         <div class="tp-courses__content">
                            <div class="tp-courses__meta">
                               <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5 (110)</span>
                               <span><i class="icon_heart_alt"></i>1200</span>
                               <span><i class="fa-light fa-user"></i>155</span>
                            </div>
                            <h3 class="tp-courses__title"><a href="course-details.html">The Most Complete Design-
                                  Thinking Course</a></h3>
                            <div class="tp-courses__avata">
                               <img src="assets/img/courses/avata/course-avata-1.jpg" alt="">
                               <span><a href="#">Jennifer Powell</a></span>
                            </div>
                            <div class="tp-courses__price d-flex justify-content-between">
                               <div class="tp-courses__time">
                                  <span><i class="fa-light fa-clock"></i>7 Week</span>
                               </div>
                               <div class="tp-courses__value">
                                  <span>$39.65</span>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-4 col-md-6">
                      <div class="tp-courses__item mb-30">
                         <div class="tp-courses__thumb w-img fix p-relative">
                            <img src="assets/img/courses/courses-6.jpg" alt="">
                            <span class="tp-courses__cat cat-color-6"><a href="#">Audio & Music</a></span>
                         </div>
                         <div class="tp-courses__content">
                            <div class="tp-courses__meta">
                               <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5 (100)</span>
                               <span><i class="icon_heart_alt"></i>18,400</span>
                               <span><i class="fa-light fa-user"></i>365</span>
                            </div>
                            <h3 class="tp-courses__title"><a href="course-details.html">Become a UI/UX Designer
                                  Everything You need</a></h3>
                            <div class="tp-courses__avata">
                               <img src="assets/img/courses/avata/course-avata-6.jpg" alt="">
                               <span><a href="#">Auston Ager</a></span>
                            </div>
                            <div class="tp-courses__price d-flex justify-content-between">
                               <div class="tp-courses__time">
                                  <span><i class="fa-light fa-clock"></i>10 Week</span>
                               </div>
                               <div class="tp-courses__value">
                                  <span>$59.65</span>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="tab-pane fade" id="pills-popularity" role="tabpanel"
                aria-labelledby="pills-popularity-tab">
                <div class="row">
                   <div class="col-lg-4 col-md-6">
                      <div class="tp-courses__item mb-30">
                         <div class="tp-courses__thumb w-img fix p-relative">
                            <img src="assets/img/courses/courses-1.jpg" alt="">
                            <span class="tp-courses__cat cat-color-1"><a href="#">Web Design</a></span>
                         </div>
                         <div class="tp-courses__content">
                            <div class="tp-courses__meta">
                               <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5 (110)</span>
                               <span><i class="icon_heart_alt"></i>1200</span>
                               <span><i class="fa-light fa-user"></i>155</span>
                            </div>
                            <h3 class="tp-courses__title"><a href="course-details.html">The Most Complete Design-
                                  Thinking Course</a></h3>
                            <div class="tp-courses__avata">
                               <img src="assets/img/courses/avata/course-avata-1.jpg" alt="">
                               <span><a href="#">Jennifer Powell</a></span>
                            </div>
                            <div class="tp-courses__price d-flex justify-content-between">
                               <div class="tp-courses__time">
                                  <span><i class="fa-light fa-clock"></i>7 Week</span>
                               </div>
                               <div class="tp-courses__value">
                                  <span>$39.65</span>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-4 col-md-6">
                      <div class="tp-courses__item mb-30">
                         <div class="tp-courses__thumb w-img fix p-relative">
                            <img src="assets/img/courses/courses-2.jpg" alt="">
                            <span class="tp-courses__cat cat-color-2"><a href="#">Development</a></span>
                         </div>
                         <div class="tp-courses__content">
                            <div class="tp-courses__meta">
                               <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5 (100)</span>
                               <span><i class="icon_heart_alt"></i>1800</span>
                               <span><i class="fa-light fa-user"></i>325</span>
                            </div>
                            <h3 class="tp-courses__title"><a href="course-details.html">Everything You Need to Know
                                  About Business.</a></h3>
                            <div class="tp-courses__avata">
                               <img src="assets/img/courses/avata/course-avata-2.jpg" alt="">
                               <span><a href="#">David Bruse</a></span>
                            </div>
                            <div class="tp-courses__price d-flex justify-content-between">
                               <div class="tp-courses__time">
                                  <span><i class="fa-light fa-clock"></i>16 Week</span>
                               </div>
                               <div class="tp-courses__value">
                                  <span>$49.65</span>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>


                   <div class="col-lg-4 col-md-6">
                      <div class="tp-courses__item mb-30">
                         <div class="tp-courses__thumb w-img fix p-relative">
                            <img src="assets/img/courses/courses-4.jpg" alt="">
                            <span class="tp-courses__cat cat-color-4"><a href="#">Art & Design</a></span>
                         </div>
                         <div class="tp-courses__content">
                            <div class="tp-courses__meta">
                               <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5 (60)</span>
                               <span><i class="icon_heart_alt"></i>400</span>
                               <span><i class="fa-light fa-user"></i>135</span>
                            </div>
                            <h3 class="tp-courses__title"><a href="course-details.html">AWS Certified Solutions Architect
                                  Associate.</a></h3>
                            <div class="tp-courses__avata">
                               <img src="assets/img/courses/avata/course-avata-4.jpg" alt="">
                               <span><a href="#">Peter Sidle</a></span>
                            </div>
                            <div class="tp-courses__price d-flex justify-content-between">
                               <div class="tp-courses__time">
                                  <span><i class="fa-light fa-clock"></i>14 Week</span>
                               </div>
                               <div class="tp-courses__value">
                                  <span>Free</span>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-4 col-md-6">
                      <div class="tp-courses__item mb-30">
                         <div class="tp-courses__thumb w-img fix p-relative">
                            <img src="assets/img/courses/courses-3.jpg" alt="">
                            <span class="tp-courses__cat cat-color-3"><a href="#">Mechanical</a></span>
                         </div>
                         <div class="tp-courses__content">
                            <div class="tp-courses__meta">
                               <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5 (88)</span>
                               <span><i class="icon_heart_alt"></i>200</span>
                               <span><i class="fa-light fa-user"></i>165</span>
                            </div>
                            <h3 class="tp-courses__title"><a href="course-details.html">Statistics Data Scince and
                                  Business Analysis</a></h3>
                            <div class="tp-courses__avata">
                               <img src="assets/img/courses/avata/course-avata-3.jpg" alt="">
                               <span><a href="#">Natasha Pawel</a></span>
                            </div>
                            <div class="tp-courses__price d-flex justify-content-between">
                               <div class="tp-courses__time">
                                  <span><i class="fa-light fa-clock"></i>10 Week</span>
                               </div>
                               <div class="tp-courses__value">
                                  <span>$69.65</span>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>

                   <div class="col-lg-4 col-md-6">
                      <div class="tp-courses__item mb-30">
                         <div class="tp-courses__thumb w-img fix p-relative">
                            <img src="assets/img/courses/courses-5.jpg" alt="">
                            <span class="tp-courses__cat cat-color-5"><a href="#">Marketing</a></span>
                         </div>
                         <div class="tp-courses__content">
                            <div class="tp-courses__meta">
                               <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5 (100)</span>
                               <span><i class="icon_heart_alt"></i>800</span>
                               <span><i class="fa-light fa-user"></i>365</span>
                            </div>
                            <h3 class="tp-courses__title"><a href="course-details.html">Learn Essentials of User Interface
                                  Design in Figma.</a></h3>
                            <div class="tp-courses__avata">
                               <img src="assets/img/courses/avata/course-avata-5.jpg" alt="">
                               <span><a href="#">Mary Vaun</a></span>
                            </div>
                            <div class="tp-courses__price d-flex justify-content-between">
                               <div class="tp-courses__time">
                                  <span><i class="fa-light fa-clock"></i>16 Week</span>
                               </div>
                               <div class="tp-courses__value">
                                  <span>Free</span>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>


                   <div class="col-lg-4 col-md-6">
                      <div class="tp-courses__item mb-30">
                         <div class="tp-courses__thumb w-img fix p-relative">
                            <img src="assets/img/courses/courses-6.jpg" alt="">
                            <span class="tp-courses__cat cat-color-6"><a href="#">Audio & Music</a></span>
                         </div>
                         <div class="tp-courses__content">
                            <div class="tp-courses__meta">
                               <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5 (100)</span>
                               <span><i class="icon_heart_alt"></i>18,400</span>
                               <span><i class="fa-light fa-user"></i>365</span>
                            </div>
                            <h3 class="tp-courses__title"><a href="course-details.html">Become a UI/UX Designer
                                  Everything You need</a></h3>
                            <div class="tp-courses__avata">
                               <img src="assets/img/courses/avata/course-avata-6.jpg" alt="">
                               <span><a href="#">Auston Ager</a></span>
                            </div>
                            <div class="tp-courses__price d-flex justify-content-between">
                               <div class="tp-courses__time">
                                  <span><i class="fa-light fa-clock"></i>10 Week</span>
                               </div>
                               <div class="tp-courses__value">
                                  <span>$59.65</span>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="tab-pane fade" id="pills-featured" role="tabpanel" aria-labelledby="pills-featured-tab">
                <div class="row">
                   <div class="col-lg-4 col-md-6">
                      <div class="tp-courses__item mb-30">
                         <div class="tp-courses__thumb w-img fix p-relative">
                            <img src="assets/img/courses/courses-5.jpg" alt="">
                            <span class="tp-courses__cat cat-color-5"><a href="#">Marketing</a></span>
                         </div>
                         <div class="tp-courses__content">
                            <div class="tp-courses__meta">
                               <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5 (100)</span>
                               <span><i class="icon_heart_alt"></i>800</span>
                               <span><i class="fa-light fa-user"></i>365</span>
                            </div>
                            <h3 class="tp-courses__title"><a href="course-details.html">Learn Essentials of User Interface
                                  Design in Figma.</a></h3>
                            <div class="tp-courses__avata">
                               <img src="assets/img/courses/avata/course-avata-5.jpg" alt="">
                               <span><a href="#">Mary Vaun</a></span>
                            </div>
                            <div class="tp-courses__price d-flex justify-content-between">
                               <div class="tp-courses__time">
                                  <span><i class="fa-light fa-clock"></i>16 Week</span>
                               </div>
                               <div class="tp-courses__value">
                                  <span>Free</span>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-4 col-md-6">
                      <div class="tp-courses__item mb-30">
                         <div class="tp-courses__thumb w-img fix p-relative">
                            <img src="assets/img/courses/courses-2.jpg" alt="">
                            <span class="tp-courses__cat cat-color-2"><a href="#">Development</a></span>
                         </div>
                         <div class="tp-courses__content">
                            <div class="tp-courses__meta">
                               <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5 (100)</span>
                               <span><i class="icon_heart_alt"></i>1800</span>
                               <span><i class="fa-light fa-user"></i>325</span>
                            </div>
                            <h3 class="tp-courses__title"><a href="course-details.html">Everything You Need to Know
                                  About Business.</a></h3>
                            <div class="tp-courses__avata">
                               <img src="assets/img/courses/avata/course-avata-2.jpg" alt="">
                               <span><a href="#">David Bruse</a></span>
                            </div>
                            <div class="tp-courses__price d-flex justify-content-between">
                               <div class="tp-courses__time">
                                  <span><i class="fa-light fa-clock"></i>16 Week</span>
                               </div>
                               <div class="tp-courses__value">
                                  <span>$49.65</span>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-4 col-md-6">
                      <div class="tp-courses__item mb-30">
                         <div class="tp-courses__thumb w-img fix p-relative">
                            <img src="assets/img/courses/courses-6.jpg" alt="">
                            <span class="tp-courses__cat cat-color-6"><a href="#">Audio & Music</a></span>
                         </div>
                         <div class="tp-courses__content">
                            <div class="tp-courses__meta">
                               <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5 (100)</span>
                               <span><i class="icon_heart_alt"></i>18,400</span>
                               <span><i class="fa-light fa-user"></i>365</span>
                            </div>
                            <h3 class="tp-courses__title"><a href="course-details.html">Become a UI/UX Designer
                                  Everything You need</a></h3>
                            <div class="tp-courses__avata">
                               <img src="assets/img/courses/avata/course-avata-6.jpg" alt="">
                               <span><a href="#">Auston Ager</a></span>
                            </div>
                            <div class="tp-courses__price d-flex justify-content-between">
                               <div class="tp-courses__time">
                                  <span><i class="fa-light fa-clock"></i>10 Week</span>
                               </div>
                               <div class="tp-courses__value">
                                  <span>$59.65</span>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-4 col-md-6">
                      <div class="tp-courses__item mb-30">
                         <div class="tp-courses__thumb w-img fix p-relative">
                            <img src="assets/img/courses/courses-4.jpg" alt="">
                            <span class="tp-courses__cat cat-color-4"><a href="#">Art & Design</a></span>
                         </div>
                         <div class="tp-courses__content">
                            <div class="tp-courses__meta">
                               <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5 (60)</span>
                               <span><i class="icon_heart_alt"></i>400</span>
                               <span><i class="fa-light fa-user"></i>135</span>
                            </div>
                            <h3 class="tp-courses__title"><a href="course-details.html">AWS Certified Solutions Architect
                                  Associate.</a></h3>
                            <div class="tp-courses__avata">
                               <img src="assets/img/courses/avata/course-avata-4.jpg" alt="">
                               <span><a href="#">Peter Sidle</a></span>
                            </div>
                            <div class="tp-courses__price d-flex justify-content-between">
                               <div class="tp-courses__time">
                                  <span><i class="fa-light fa-clock"></i>14 Week</span>
                               </div>
                               <div class="tp-courses__value">
                                  <span>Free</span>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-4 col-md-6">
                      <div class="tp-courses__item mb-30">
                         <div class="tp-courses__thumb w-img fix p-relative">
                            <img src="assets/img/courses/courses-1.jpg" alt="">
                            <span class="tp-courses__cat cat-color-1"><a href="#">Web Design</a></span>
                         </div>
                         <div class="tp-courses__content">
                            <div class="tp-courses__meta">
                               <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5 (110)</span>
                               <span><i class="icon_heart_alt"></i>1200</span>
                               <span><i class="fa-light fa-user"></i>155</span>
                            </div>
                            <h3 class="tp-courses__title"><a href="course-details.html">The Most Complete Design-
                                  Thinking Course</a></h3>
                            <div class="tp-courses__avata">
                               <img src="assets/img/courses/avata/course-avata-1.jpg" alt="">
                               <span><a href="#">Jennifer Powell</a></span>
                            </div>
                            <div class="tp-courses__price d-flex justify-content-between">
                               <div class="tp-courses__time">
                                  <span><i class="fa-light fa-clock"></i>7 Week</span>
                               </div>
                               <div class="tp-courses__value">
                                  <span>$39.65</span>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>

                   <div class="col-lg-4 col-md-6">
                      <div class="tp-courses__item mb-30">
                         <div class="tp-courses__thumb w-img fix p-relative">
                            <img src="assets/img/courses/courses-3.jpg" alt="">
                            <span class="tp-courses__cat cat-color-3"><a href="#">Mechanical</a></span>
                         </div>
                         <div class="tp-courses__content">
                            <div class="tp-courses__meta">
                               <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5 (88)</span>
                               <span><i class="icon_heart_alt"></i>200</span>
                               <span><i class="fa-light fa-user"></i>165</span>
                            </div>
                            <h3 class="tp-courses__title"><a href="course-details.html">Statistics Data Scince and
                                  Business Analysis</a></h3>
                            <div class="tp-courses__avata">
                               <img src="assets/img/courses/avata/course-avata-3.jpg" alt="">
                               <span><a href="#">Natasha Pawel</a></span>
                            </div>
                            <div class="tp-courses__price d-flex justify-content-between">
                               <div class="tp-courses__time">
                                  <span><i class="fa-light fa-clock"></i>10 Week</span>
                               </div>
                               <div class="tp-courses__value">
                                  <span>$69.65</span>
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
 <!-- course end  -->

 <!-- testimonial start  -->
 {{-- <div class="tp-testimonial__section pb-120">
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
                      <div class="tp-testimonial__box d-md-flex white-bg align-items-center">
                         <img src="assets/img/testimonial/testimonial-thumb.jpg" alt="">
                         <div class="tp-testimonial__review">
                            <span class="tp-testimonial__quote"><i class="fa-solid fa-quote-left"></i></span>
                            <p>Engage with our profeessional realestaeyeagants sell buy or <br> rent your home auweGet
                               emails directly areain falls box andery <br> ithe. Quis ipsum suspendisse ultrices
                               gravida.</p>
                            <h3>Maria Zokatti</h3>
                            <span>CEO, Psdboss</span>
                         </div>
                      </div>
                      <div class="tp-testimonial__box d-md-flex white-bg align-items-center">
                         <img src="assets/img/testimonial/testimonial-thumb-2.jpg" alt="">
                         <div class="tp-testimonial__review">
                            <span class="tp-testimonial__quote"><i class="fa-solid fa-quote-left"></i></span>
                            <p>Your company is truly upstanding and is behind its product 100%. <br> I STRONGLY
                               recommend education to EVERYONE interested <br> in running a successful online business
                            </p>
                            <h3>Judy N</h3>
                            <span>CEO, Psdboss</span>
                         </div>
                      </div>
                      <div class="tp-testimonial__box d-md-flex white-bg align-items-center">
                         <img src="assets/img/testimonial/testimonial-thumb-3.jpg" alt="">
                         <div class="tp-testimonial__review">
                            <span class="tp-testimonial__quote"><i class="fa-solid fa-quote-left"></i></span>
                            <p>Just what I was looking for. Best. Product. Ever! Education is great. Education is
                               the most valuable business resource <br> we have EVER purchased.</p>
                            <h3>Gabbey A.</h3>
                            <span>CEO, Psdboss</span>
                         </div>
                      </div>
                      <div class="tp-testimonial__box d-md-flex white-bg align-items-center">
                         <img src="assets/img/testimonial/testimonial-thumb-4.jpg" alt="">
                         <div class="tp-testimonial__review">
                            <span class="tp-testimonial__quote"><i class="fa-solid fa-quote-left"></i></span>
                            <p>I would also like to say thank you to all your staff. It's the perfect <br> solution for
                               our business. Education is the most valuable <br> business resource we have EVER
                               purchased.</p>
                            <h3>Olive Yew.</h3>
                            <span>CEO, Psdboss</span>
                         </div>
                      </div>
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
 </div> --}}
 <!-- tesimoial end  -->

 <!-- team start  -->
 <div class="tp-team__section pb-130">
    <div class="container">
       <div class="row">
          <div class="tp-section__title-wrapper mb-40 text-center">
             <h3 class="tp-section__title mb-15">Become A Instruction <br>
                Instructor.</h3>
             <p>Etiam porttitor risus massa nec condiment gravida.</p>
          </div>
       </div>
       <div class="tp-team__wrapper mb-30">
          <div class="row">
             <div class="col-lg-3 col-md-6">
                <div class="tp-team__member fix mb-30">
                   <div class="tp-team__img w-img tp-team__overlay p-relative">
                      <a href="instructor-details.html">
                         <img src="{{ asset('frontend/assets/img/team/team-1.1.jpg') }}" alt="">
                      </a>
                      <div class="tp-team__info text-center">
                         <h3 class="tp-team__name">Andra Flatcher</h3>
                         <span>Teacher MBA</span>
                      </div>
                      <div class="tp-team__social">
                         <span><a href="#"><i class="fab fa-facebook-f"></i></a></span>
                         <span><a href="#"><i class="fab fa-youtube"></i></a></span>
                         <span><a href="#"><i class="fab fa-linkedin"></i></a></span>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-lg-3 col-md-6">
                <div class="tp-team__member fix mb-30">
                   <div class="tp-team__img w-img tp-team__overlay p-relative">
                      <a href="instructor-details.html">
                      <img src="{{ asset('frontend/assets/img/team/team-1.2.jpg') }}" alt="">
                      </a>
                      <div class="tp-team__info text-center">
                         <h3 class="tp-team__name">Morgan Key</h3>
                         <span>Teacher MBA</span>
                      </div>
                      <div class="tp-team__social">
                         <span><a href="#"><i class="fab fa-facebook-f"></i></a></span>
                         <span><a href="#"><i class="fab fa-youtube"></i></a></span>
                         <span><a href="#"><i class="fab fa-linkedin"></i></a></span>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-lg-3 col-md-6">
                <div class="tp-team__member fix mb-30">
                   <div class="tp-team__img w-img tp-team__overlay p-relative">
                      <a href="instructor-details.html">
                      <img src="{{ asset('frontend/assets/img/team/team-1.3.jpg') }}" alt="">
                      </a>
                      <div class="tp-team__info text-center">
                         <h3 class="tp-team__name">Andra Flatcher</h3>
                         <span>Course Mentor</span>
                      </div>
                      <div class="tp-team__social">
                         <span><a href="#"><i class="fab fa-facebook-f"></i></a></span>
                         <span><a href="#"><i class="fab fa-youtube"></i></a></span>
                         <span><a href="#"><i class="fab fa-linkedin"></i></a></span>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-lg-3 col-md-6">
                <div class="tp-team__member fix mb-30">
                   <div class="tp-team__img w-img tp-team__overlay p-relative">
                      <a href="instructor-details.html">
                      <img src="{{ asset('frontend/assets/img/team/team-1.4.jpg') }}" alt="">
                      </a>
                      <div class="tp-team__info text-center">
                         <h3 class="tp-team__name">Andra Flatcher</h3>
                         <span>Teacher MBA</span>
                      </div>
                      <div class="tp-team__social">
                         <span><a href="#"><i class="fab fa-facebook-f"></i></a></span>
                         <span><a href="#"><i class="fab fa-youtube"></i></a></span>
                         <span><a href="#"><i class="fab fa-linkedin"></i></a></span>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-lg-12">
             <div class="tp-hero__btn-wrappper text-center">
                <a href="instructor-2.html" class="tp-border-btn br-0">
                   <span>See all Team</span>
                   <div class="transition"></div>
                </a>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- team end  -->

 <!-- cta start-->
 <div class="tp-cta__section p-relative">
    <div class="tp-cta__bg grey-bg">
    </div>
    <div class="container">
       <div class="tp-cta-wrapper">
          <div class="tp-box__shadow ">
             <div class="tp-cta__box z-index-11 p-relative " data-background="assets/img/bg/newsletter-bg-1.jpg">
                <div class="row align-items-center">
                   <div class="col-lg-9 col-md-8">
                      <h3 class="tp-cta__title text-white">Want to study at Online <br> program ?</h3>
                   </div>
                   <div class="col-lg-3 col-md-4">
                      <div class="tp-cta__btn-wrappper d-flex justify-content-md-end">
                         <a href="contact.html" class="tp-white-btn">
                            <span>Apply now</span>
                            <div class="transition"></div>
                         </a>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- newsletter end -->

@endsection
