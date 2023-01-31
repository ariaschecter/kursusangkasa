@extends('user.user_master')
@section('user')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Dashboard</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item active">Dashboard</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->

        @include('template.course_user_acces')


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
</div>
@endsection
