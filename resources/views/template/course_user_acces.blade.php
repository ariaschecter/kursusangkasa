<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Course Payed</h4>
                    <div class="card-deck row">
                        @foreach ($course_accesses as $acces)
                                    @php
                                        $lifetime = $acces->course_acces_subscribe;
                                        $date = new \Carbon\Carbon($lifetime);
                                        $gte = $date->gte(\Carbon\Carbon::now());
                                    @endphp
                            <div class="card col-sm-12 col-md-6 col-lg-4 col-xl-3">
                                <a href="{{ route('user.course.continue', $acces->course->course_slug) }}"><img class="card-img-top" src="{{ asset('storage/' . $acces->course->course_picture) }}" alt="Card image cap"></a>
                                <div class="card-body">
                                    <a href="{{ route('user.course.continue', $acces->course->course_slug) }}"><h5 class="card-title">{{ $acces->course->course_name }}</h5></a>
                                <p class="card-text">{!! Str::of($acces->course->course_desc)->limit(100) !!}</p>
                                <div class="card-footer">
                                    @if ($lifetime == null)
                                    <small class="h6 text-primary">Fulltime Access</small>
                                    @else
                                        @if($gte)
                                        <small class="h6 text-danger">Until {{ \Carbon\Carbon::parse($lifetime)->toDateString() }}</small>
                                        @else
                                        <small class="h6 text-danger">Course Access is over</small>
                                        @endif
                                    @endif
                                </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
</div>
