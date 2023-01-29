@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">{{ $course->course_name }} course</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.course.index') }}">Course</a></li>
                            <li class="breadcrumb-item active">{{ $course->course_name }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->

        {{-- Start Table Batik --}}
        <div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">All List Course</h4>

                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Sub Course Name</th>
                                        <th>List Course Name</th>
                                        <th>Youtube Link</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    @php($i = 1)
                                    @foreach ($course->sub_course as $sub_course)
                                        @foreach ($sub_course->list_course as $list_course)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $list_course->sub_course->sub_course_name }}</td>
                                                <td>{{ $list_course->list_course_name }}</td>
                                                <td>
                                                    <div class="course__video-play">
                                                        <a href="https://www.youtube.com/watch?v={{ $list_course->list_course_link }}" clas data-fancybox="" class="play-btn popup-video"> {{ $list_course->list_course_link }} </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endforeach

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div>
        {{-- End Table Batik --}}

        {{-- Start Table Sub course --}}
        <div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">All Sub Course</h4>

                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Sub Course Name</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    {{-- @php($i = 1) --}}
                                    @foreach ($course->sub_course as $sub_course)
                                        <tr>
                                            <td>{{ $sub_course->sub_course_no }}</td>
                                            <td>{{ $sub_course->sub_course_name }}</td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div>
        {{-- End Table Sub course --}}

    </div>
</div>
@endsection
