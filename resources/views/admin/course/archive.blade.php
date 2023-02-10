@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">All Course Archive</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.course.index') }}">Course</a></li>
                            <li class="breadcrumb-item active">Archive</li>
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

                        <h4 class="card-title">All Course Archive Data</h4>

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Course Picture</th>
                                    <th>Course Name</th>
                                    <th>Teacher</th>
                                    <th>Enroll</th>
                                    <th>Price</th>
                                    <th>Teacher Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>
                                @php($i = 1)
                                @foreach ($courses as $course)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>
                                            <a href="{{ asset('storage/' . $course->course_picture) }}" class="popup-image">
                                                <img src="{{ asset('storage/' . $course->course_picture) }}" alt="course picture" style="width: 50px; height: 50px">
                                            </a>
                                        </td>
                                        <td>{{ $course->course_name }}</td>
                                        <td>{{ $course->teacher->user->name }}</td>
                                        <td>{{ $course->course_enroll }}</td>
                                        <td>{{ number_format($course->price_new, 0) }}</td>
                                        <td>{{ $course->course_status }}</td>
                                        <td>
                                            <a href="{{ route('admin.course.restore', $course->id) }}" class="btn btn-primary sm" title="Restore Data" id="restore"><i class="fas fa-trash-restore-alt"></i></a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
</div>
@endsection
