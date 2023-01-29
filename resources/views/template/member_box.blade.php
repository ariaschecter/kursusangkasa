<div class="course__member mb-45">
    @php
        $course_accesses = \App\Models\CourseAcces::where('course_id', $course->id)->get();
    @endphp
    @foreach ($course_accesses as $acces)
    <div class="course__member-item">
       <div class="row align-items-center">
          <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-6">
             <div class="course__member-thumb d-flex align-items-center">
                <img src="{{ asset('storage/' . $acces->user->user_picture) }}" alt="">
                <div class="course__member-name ml-20">
                   <h5>{{ $acces->user->name }}</h5>
                </div>
             </div>
          </div>
          <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
             <div class="course__member-info pl-45">
                <h5>{{ count($acces->user->course_acces) }}</h5>
                <span>Courses</span>
             </div>
          </div>
          <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
             <div class="course__member-info pl-70">
                <h5>{{ count($acces->user->review) }}</h5>
                <span>Reviw</span>
             </div>
          </div>
          <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
             <div class="course__member-info pl-85">
                <h5>{{ $acces->user->review->avg('review_star') }}</h5>
                <span>Rating</span>
             </div>
          </div>
       </div>
    </div>
    @endforeach
 </div>
