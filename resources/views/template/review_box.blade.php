<li>
    <div class="course__comment-box ">
        <div class="course__comment-thumb float-start">
        <img src="{{ asset('storage/' . $reviewer->user->user_picture) }}" alt="">
        </div>
        <div class="course__comment-content">
        <div class="course__comment-wrapper ml-70 fix">
            <div class="course__comment-info float-start">
                <h4>{{ $reviewer->user->name }}</h4>
                <span>{{ \Carbon\Carbon::parse($reviewer->created_at)->diffForHumans() }}</span>
            </div>
            <div class="course__comment-rating float-start float-sm-end">
                <ul>
                    <div class="rating-star">
                        <input type="hidden" class="rating" data-filled="mdi mdi-star text-warning" data-empty="mdi mdi-star-outline text-muted" data-readonly value="{{  $reviewer->review_star }}"/>
                    </div>
                </ul>
            </div>
        </div>
        <div class="course__comment-text ml-70">
            <p>{{ $reviewer->review_feedback }}</p>
        </div>
        </div>
    </div>
</li>
