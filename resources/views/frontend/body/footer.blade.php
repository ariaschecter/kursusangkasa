@php
    $setting = \App\Models\Setting::first();
@endphp
<footer>
    <div class="footer__area grey-bg">
       <div class="container">
          <div class="footer__top ">
             <div class="row">
                <div class="col-xxl-5 col-xl-5 col-lg-4 col-md-12">
                   <div class="footer__widget mb-50 footer-col-1">
                      <div class="footer__widget-logo mb-30">
                        <a href="{{ route('home.index') }}"><img src="{{ asset('frontend/assets/img/logo/logo.png') }}" alt=""></a>
                      </div>
                      <div class="footer__widget-content">
                         <p>Aut cum mollitia reprehenderit.
                            Eos cumque dicta adipisci amet
                            architecto culpa.</p>
                        @include('template.social_media')
                      </div>
                   </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-6">
                   <div class="footer__widget mb-50 footer-col-2">
                      <h3 class="footer__widget-title">Information</h3>
                      <div class="footer__widget-content">
                         <ul>
                            <li><a href="{{ route('home.index') }}">Home</a></li>
                            <li><a href="{{ route('home.category.index') }}">Category</a></li>
                            <li><a href="{{ route('home.course.index') }}">Course</a></li>
                            <li><a href="{{ route('home.about.index') }}">About Us</a></li>
                            <li><a href="{{ route('home.contact.index') }}">Contact</a></li>
                         </ul>
                      </div>
                   </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-6">
                   <div class="footer__widget mb-50 footer-col-3">
                      <h3 class="footer__widget-title">Courses</h3>
                      <div class="footer__widget-content">
                         <ul>
                            @foreach (\App\Models\Course::where('course_status', 'ACTIVE')->latest()->limit(5)->get() as $course)
                                <li><a href="{{ route('home.course.show', $course->course_slug) }}">{{ $course->course_name }}</a></li>
                            @endforeach
                         </ul>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="footer__bottom">
             <div class="row">
                <div class="col-12">
                   <div class="footer__copyright text-center">
                      <p> © {{ date('Y') }} Ruang Angkasa, All Rights Reserved.</p>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </footer>
