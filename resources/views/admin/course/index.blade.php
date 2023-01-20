@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">All Course</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Course</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <a href="{{ route('admin.course.add') }}" class="btn btn-primary mb-2">Add Course</a>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">All Course Data</h4>

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Teacher</th>
                                    <th>Category</th>
                                    <th>Course Name</th>
                                    <th>Price New</th>
                                    <th>Enroll</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>
                                @php($i = 1)
                                @foreach ($courses as $course)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $course->teacher->user->name }}</td>
                                        <td>{{ $course->category->category_name }}</td>
                                        <td>{{ $course->course_name }}</td>
                                        <td>{{ number_format($course->price_new, 0) }}</td>
                                        <td>{{ $course->course_enroll }}</td>
                                        <td>{{ $course->course_status }}</td>
                                        <td>
                                            <a href="{{ route('admin.course.show', $course->id) }}" class="btn btn-success sm" title="Show Data"><i class="fas fa-eye"></i></a>
                                            <a href="{{ route('admin.course.edit', $course->id) }}" class="btn btn-info sm" title="Edit Data"><i class="fas fa-edit"></i></a>
                                            <a href="{{ route('admin.course.delete', $course->id) }}" class="btn btn-danger sm" title="Delete Data" id="delete"><i class="fas fa-trash-alt"></i></a>
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
