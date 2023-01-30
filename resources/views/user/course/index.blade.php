@extends('user.user_master')
@section('user')
<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">All Course</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Course</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->
    </div>
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
                                <div class="card col-3">
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


    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Other Course</h4>
                        <div class="card-deck row">
                            @foreach ($courses as $course)
                                @php
                                    $payed = false;
                                @endphp
                                @foreach ($course_accesses as $acces)
                                    @php
                                        if ($acces->course_id == $course->id) {
                                            $payed = true;
                                        }
                                    @endphp
                                @endforeach

                                @if ($payed == false)
                                    <div class="card col-3">
                                        <a href="{{ route('home.course.show', $course->course_slug) }}"><img class="card-img-top" src="{{ asset('storage/' . $course->course_picture) }}" alt="Card image cap"></a>
                                        <div class="card-body">
                                            <a href="{{ route('home.course.show', $course->course_slug) }}"><h5 class="card-title">{{ $course->course_name }}</h5></a>
                                            <p class="card-text">{!! Str::of($course->course_desc)->limit(100) !!}</p>
                                            <div class="card-footer">
                                                <small class="h6 text-warning"><a href="{{ route('home.course.show', $course->course_slug) }}">Course Detail</a></small>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>


</div>
@endsection
