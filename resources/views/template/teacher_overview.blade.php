<div class="course-details__meta d-sm-flex">
    <div class="course__teacher-3 d-flex align-items-center mr-70 mb-30">
       <div class="course__teacher-thumb-3 mr-15">
          <img src="{{ asset('storage/' . $course->teacher->user->user_picture) }}" alt="">
       </div>
       <div class="course__teacher-info-3">
          <h5>Teacher</h5>
          <p><a href="{{ route('home.teacher.show', $course->teacher->user->username) }}">{{ $course->teacher->user->name }}</a></p>
       </div>
    </div>
    <div class="course__update mr-80 mb-30">
       <h5>Last Update:</h5>
       @php
           $last_update = \App\Models\ListCourse::where('course_id', $course->id)->latest()->first();
       @endphp
       <p>{{ \Carbon\Carbon::parse($last_update->updated_at)->format('d/m/Y') }}</p>
    </div>
    <div class="course__rating-2 mb-30">
       <h5>Review:</h5>
       <div class="course__rating-inner d-flex align-items-center">
          <p>
             <div class="rating-star">
                 <input type="hidden" class="rating" data-filled="mdi mdi-star text-warning" data-empty="mdi mdi-star-outline text-muted" data-readonly value="{{ $course->teacher->review->avg('review_star') }}"/>
             </div>
             {{ round($course->teacher->review->avg('review_star'), 2) }}
          </p>
       </div>
    </div>
 </div>
