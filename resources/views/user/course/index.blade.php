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


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">All Course Data</h4>
                        <div class="card-deck row">
                            @foreach ($courses as $acces)
                                <div class="card col-3">
                                    <a href="{{ route('user.course.continue', $acces->course->course_slug) }}"><img class="card-img-top" src="{{ asset('storage/' . $acces->course->course_picture) }}" alt="Card image cap"></a>
                                    <div class="card-body">
                                        <a href="{{ route('user.course.continue', $acces->course->course_slug) }}"><h5 class="card-title">{{ $acces->course->course_name }}</h5></a>
                                    <p class="card-text">{{ Str::of($acces->course->course_desc)->limit(100) }}</p>
                                    <div class="card-footer">
                                        @if ($lifetime = $acces->course_acces_subscribe == null)
                                        <small class="h6 text-primary">Fulltime Access</small>
                                        @else
                                        <small class="h6 text-danger">Until {{ \Carbon\Carbon::parse($acces->course_acces_subscribe)->diffForHumans() }}</small>
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
</div>
@endsection
