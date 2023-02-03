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
                        <h3 class="breadcrumb__title">Contact</h3>
                        <div class="breadcrumb__list">
                        <span><a href="{{ route('home.index') }}">Home</a></span>
                        <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                        <span>Contact</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <!-- breadcrumb area end -->

 <!-- contact area start -->
 <section class="contact__area pt-115 pb-120">
    <div class="container">
       <div class="row">
          <div class="col-xxl-7 col-xl-7 col-lg-6">
             <div class="contact__wrapper">
                <div class="section__title-wrapper mb-40">
                   <h2 class="section__title">Get in<span class="yellow-bg yellow-bg-big">touch<img src="assets/img/shape/yellow-bg.png" alt=""></span></h2>
                   <p>Have a question or just want to say hi? We'd love to hear from you.</p>
                </div>
                <div class="contact__form mb-30">
                   <form action="{{ route('home.contact.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-md-6">
                                <div class="contact__form-input">
                                <input type="text" placeholder="Your Name" name="contact_name" value="{{ old('contact_name') }}">
                                </div>
                                @error('contact_name') <span class="text-danger"> {{ $message }}</span> @enderror
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-md-6">
                                <div class="contact__form-input">
                                <input type="email" placeholder="Your Email" name="contact_email" value="{{ old('contact_email') }}">
                                </div>
                                @error('contact_email') <span class="text-danger"> {{ $message }}</span> @enderror
                            </div>
                            <div class="col-xxl-12">
                                <div class="contact__form-input">
                                <input type="text" placeholder="Subject" name="contact_subject" value="{{ old('contact_subject') }}">
                                </div>
                                @error('contact_subject') <span class="text-danger"> {{ $message }}</span> @enderror
                            </div>
                            <div class="col-xxl-12">
                                <div class="contact__form-input">
                                <textarea placeholder="Enter Your Message" name="contact_message">{{ old('contact_message') }}</textarea>
                                </div>
                                @error('contact_message') <span class="text-danger"> {{ $message }}</span> @enderror
                            </div>
                            <div class="col-xxl-12">
                                <div class="contact__btn">
                                <button type="submit" class="tp-btn"><span>Send your message</span> </button>
                                </div>
                            </div>
                        </div>
                   </form>
                </div>
                <div class="contact-response">
                   <p class="ajax-response"></p>
                </div>
             </div>
          </div>
          <div class="col-xxl-4 offset-xxl-1 col-xl-4 offset-xl-1 col-lg-5 offset-lg-1">
             <div class="contact__info white-bg p-relative z-index-1">
                <div class="contact__shape">
                   <img class="contact-shape-1" src="assets/img/contact/contact-shape-1.png" alt="">
                   <img class="contact-shape-2" src="assets/img/contact/contact-shape-2.png" alt="">
                   <img class="contact-shape-3" src="assets/img/contact/contact-shape-3.png" alt="">
                </div>
                <div class="contact__info-inner white-bg">
                   <ul>
                      <li>
                         <div class="contact__info-item d-flex align-items-start mb-35">
                            <div class="contact__info-icon mr-15">
                               <svg class="map" viewBox="0 0 24 24">
                                  <path class="st0" d="M21,10c0,7-9,13-9,13s-9-6-9-13c0-5,4-9,9-9S21,5,21,10z"/>
                                  <circle class="st0" cx="12" cy="10" r="3"/>
                               </svg>
                            </div>
                            <div class="contact__info-text">
                               <h4>Kebon Kahuripan</h4>
                               <p><a target="_blank" href="https://goo.gl/maps/JYvmTvRzaQuERa7K6">Jl. Kertasuta No.11 C, Sutawinangun, Kec. Kedawung, Kabupaten Cirebon, Jawa Barat 45153</a></p>

                            </div>
                         </div>
                      </li>
                      <li>
                         <div class="contact__info-item d-flex align-items-start mb-35">
                            <div class="contact__info-icon mr-15">
                               <svg class="mail" viewBox="0 0 24 24">
                                  <path class="st0" d="M4,4h16c1.1,0,2,0.9,2,2v12c0,1.1-0.9,2-2,2H4c-1.1,0-2-0.9-2-2V6C2,4.9,2.9,4,4,4z"/>
                                  <polyline class="st0" points="22,6 12,13 2,6 "/>
                               </svg>
                            </div>
                            <div class="contact__info-text">
                               <h4>Email us directly</h4>
                               <p><a href="mailto:support@Tutorgo.com">support@Tutorgo.com</a></p>
                               <p><a href="mailto:info@Tutorgo.com"> info@Tutorgo.com</a></p>
                            </div>
                         </div>
                      </li>
                      <li>
                         <div class="contact__info-item d-flex align-items-start mb-35">
                            <div class="contact__info-icon mr-15">
                               <svg class="call" viewBox="0 0 24 24">
                                  <path class="st0" d="M22,16.9v3c0,1.1-0.9,2-2,2c-0.1,0-0.1,0-0.2,0c-3.1-0.3-6-1.4-8.6-3.1c-2.4-1.5-4.5-3.6-6-6  c-1.7-2.6-2.7-5.6-3.1-8.7C2,3.1,2.8,2.1,3.9,2C4,2,4.1,2,4.1,2h3c1,0,1.9,0.7,2,1.7c0.1,1,0.4,1.9,0.7,2.8c0.3,0.7,0.1,1.6-0.4,2.1  L8.1,9.9c1.4,2.5,3.5,4.6,6,6l1.3-1.3c0.6-0.5,1.4-0.7,2.1-0.4c0.9,0.3,1.8,0.6,2.8,0.7C21.3,15,22,15.9,22,16.9z"/>
                                  </svg>
                            </div>
                            <div class="contact__info-text">
                               <h4>Phone</h4>
                               <p><a href="tel:+{{ $setting->no_phone }}">+{{ $setting->no_phone }}</a></p>
                            </div>
                         </div>
                      </li>
                   </ul>
                   <div class="contact__social pl-30">
                      <h4>Follow Us</h4>
                      @include('template.social_media')
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- contact area end -->

 <div class="tp-contact-map">
    <div class="container-fluid p-0">
       <div class="tp-map-height">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15849.79482527649!2d108.5398019!3d-6.7149686!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd8c36307eba9d72e!2sKebon%20Kahuripan!5e0!3m2!1sen!2sid!4v1675427039730!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       </div>
    </div>
 </div>

 @endsection

 {{-- <iframe src="" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
