<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Tutorgo - Online Learning and Education HTML Template - shared on themelock.com</title>
   @isset($course)
    <meta name="description" content="{{ Str::of($course->course_desc)->limit(155) }}">
   @endisset
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Place favicon.ico in the root directory -->
   <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/img/logo/favicon.png') }}">

   <!-- CSS here  -->
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.css') }}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/meanmenu.css') }}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css') }}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/font-awesome-pro.css') }}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/elegent-icons.css') }}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/spacing.css') }}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}">
   <link rel="stylesheet" href="{{ asset('user/css/index.css') }}">
   <!-- css end  here-->
</head>

<body>
   <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->

   <!-- pre loader area start -->
   {{-- <div class="tp-preloader">
      <div class="tp-preloader__center">
         <span>
            <svg width="170" height="132" viewBox="0 0 170 132" fill="none" xmlns="http://www.w3.org/2000/svg">
               <g clip-path="url(#clip0_6_12)">
               <path d="M113.978 61.1738L55.4552 2.8186C52.8594 0.230266 48.7298 0.230266 46.252 2.8186L1.88784 46.4673C-0.707934 49.0557 -0.707934 53.1735 1.88784 55.6441L14.5127 68.2329L66.9002 120.353L113.86 75.7626C118.108 71.8801 118.108 65.2916 113.978 61.1738Z" fill="black"/>
               <path d="M167.781 51.5263L90.2621 129.059C86.1325 133.177 79.6431 133.177 75.5134 129.059L31.6212 85.2923C35.7509 89.4101 42.2403 89.4101 46.37 85.2923L123.889 7.75996C126.485 5.17163 130.615 5.17163 133.092 7.75996L167.663 42.2319C170.377 44.8202 170.377 48.938 167.781 51.5263Z" fill="#5392FB"/>
               <path d="M74.9235 35.0551C76.6933 36.8199 78.4632 38.467 79.9971 39.8788C82.1209 41.6436 82.2389 44.8202 80.233 46.8203L48.8478 78.1156C44.1282 82.8217 36.4588 82.8217 31.7392 78.1156C27.0197 73.4095 27.0197 65.7622 31.7392 61.0561L63.1245 29.7608C65.1303 27.7607 68.3161 27.8784 70.0859 29.9961C71.5018 31.5256 73.1536 33.2904 74.9235 35.0551Z" fill="currentColor" class="path-yellow"/>
               </g>
               <defs>
               <clipPath id="clip0_6_12">
               <rect width="169.787" height="131.064" fill="white" transform="translate(0 0.936172)"/>
               </clipPath>
               </defs>
               </svg>

         </span>
      </div>
   </div> --}}
   <!-- pre loader area end -->

    <!-- back to top start -->
    <button class="tp-backtotop">
      <span><i class="fal fa-angle-double-up"></i></span>
   </button>
   <!-- back to top end -->


   <!-- header area start -->
   <!-- header area end -->

   <main>
    <div class="row">
        @include('user.body.sidebar')
        @yield('frontend')
    </div>

   </main>


   <!-- JS here -->
   <script src="{{ asset('frontend/assets/js/vendor/jquery.js') }}"></script>
   <script src="{{ asset('frontend/assets/js/vendor/waypoints.js') }}"></script>
   <script src="{{ asset('frontend/assets/js/bootstrap-bundle.js') }}"></script>
   <script src="{{ asset('frontend/assets/js/meanmenu.js') }}"></script>
   <script src="{{ asset('frontend/assets/js/slick.js') }}"></script>
   <script src="{{ asset('frontend/assets/js/magnific-popup.js') }}"></script>
   <script src="{{ asset('frontend/assets/js/parallax.js') }}"></script>
   <script src="{{ asset('frontend/assets/js/nice-select.js') }}"></script>
   <script src="{{ asset('frontend/assets/js/counterup.js') }}"></script>
   <script src="{{ asset('frontend/assets/js/wow.js') }}"></script>
   <script src="{{ asset('frontend/assets/js/isotope-pkgd.js') }}"></script>
   <script src="{{ asset('frontend/assets/js/imagesloaded-pkgd.js') }}"></script>
   <script src="{{ asset('frontend/assets/js/ajax-form.js') }}"></script>
   <script src="{{ asset('frontend/assets/js/countdown.js') }}"></script>
   <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
</body>

</html>
