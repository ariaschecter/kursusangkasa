@php
    $setting = \App\Models\Setting::first();
@endphp
<header>
    <div class="tp-header__area tp-header__transparent">
       <div class="tp-header__main" id="header-sticky">
          <div class="container">
             <div class="row align-items-center">
                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-6">
                   <div class="logo has-border">
                      <a href="{{ route('home.index') }}">
                         <img src="{{ asset('frontend/assets/img/logo/white-logo.png') }}" alt="logo">
                      </a>
                   </div>
                </div>
                <div class="col-xxl-5 col-xl-5 col-lg-6 d-none d-lg-block">
                   <div class="main-menu">
                      <nav id="mobile-menu">
                         <ul>
                            <li>
                               <a href="{{ route('home.index') }}">Home</a>
                            </li>
                            <li>
                               <a href="{{ route('home.category.index') }}">Category</a>
                            </li>
                            <li>
                               <a href="{{ route('home.course.index') }}">Course</a>
                            </li>
                            <li>
                               <a href="#">About Us</a>
                            </li>
                            <li>
                               <a href="#">Contact</a>
                            </li>
                         </ul>
                      </nav>
                   </div>
                </div>
                <div class="col-xxl-5 col-xl-5 col-lg-4 col-md-6 col-6">
                   <div class="tp-header__main-right d-flex justify-content-end align-items-center pl-30">
                      <div class="header-acttion-btns d-flex align-items-center d-none d-md-flex">
                         <a href="https://wa.me/{{ $setting->no_phone }}" class="tp-phone-btn d-none d-xl-block"><i class="fa-brands fa-whatsapp"></i>+{{ $setting->no_phone }} <span></span></a>
                         @auth
                         <a href="{{ route('dashboard') }}" class="tp-btn">
                            <span>Dashboard</span>
                            <div class="transition"></div>
                         </a>
                         @else
                         <a href="{{ route('login') }}" class="tp-btn">
                            <span>Login</span>
                            <div class="transition"></div>
                         </a>
                         <a href="{{ route('register') }}" class="tp-btn">
                            <span>Register</span>
                            <div class="transition"></div>
                         </a>
                         @endauth
                      </div>
                      <div class="tp-header__hamburger ml-50 d-lg-none">
                         <button class="hamburger-btn offcanvas-open-btn">
                            <span></span>
                            <span></span>
                            <span></span>
                         </button>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </header>
