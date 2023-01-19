@extends('frontend.frontend_master')

@section('frontend')
    <!-- breadcrumb area start -->
    <div class="breadcrumb__area include-bg pt-200 pb-150 breadcrumb__overlay"
    data-background="assets/img/breadcrumb/breadcrumb-bg-2.jpg">
    <div class="container">
       <div class="row">
          <div class="col-xxl-12">
             <div class="breadcrumb__content p-relative z-index-1">
                <h3 class="breadcrumb__title">Categories</h3>
                <div class="breadcrumb__list">
                   <span><a href="{{ route('home.index') }}">Home</a></span>
                   <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                   <span>Categories</span>
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
       <div class="row">
          <div class="col-xxl-12">
             <div class="course__tab-conent pb-40">
                <div class="tab-content" id="courseTabContent">
                   <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                      <!-- course start  -->
                      <div class="tp-courses-2__section">
                         <div class="tp-courses-2__tab-content">
                            <div class="row">

                                @foreach ($categories as $category)
                                    @include('frontend.template.category_card')
                                @endforeach

                            </div>
                         </div>
                      </div>
                      <!-- course end  -->
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-xxl-12">
             <div class="basic-pagination">
                <nav>
                   {{ $categories->links() }}
                 </nav>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- course area end -->
@endsection