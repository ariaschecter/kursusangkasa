@extends('teacher.teacher_master')
@section('teacher')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<div class="page-content">
  <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Edit Sub Course</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('teacher.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('teacher.course.show', $subcourse->course->course_slug) }}">{{ $subcourse->course->course_name }}</a></li>
                        <li class="breadcrumb-item active">Edit Sub Course</li>
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

                <h4 class="card-title">Edit Sub Course </h4>

                <form method="post" action="{{ route('teacher.sub_course.update', $subcourse->sub_course_slug) }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-3">
                        <label for="sub_course_no" class="col-sm-2 col-form-label">Sub Course Number</label>
                        <div class="col-sm-10">
                            <input name="sub_course_no" class="form-control" type="text" value="{{ $subcourse->sub_course_no }}" id="sub_course_no">
                            @error('sub_course_no')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="sub_course_name" class="col-sm-2 col-form-label">Sub Course Name</label>
                        <div class="col-sm-10">
                            <input name="sub_course_name" class="form-control" type="text" value="{{ $subcourse->sub_course_name }}" id="sub_course_name">
                            @error('sub_course_name')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- end row -->

                    <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Sub Course Data">
                  </form>

              </div>
          </div>

  </div>
</div>

<script>
  $(document).ready(function() {
    $('#image').change(function(e) {
      const reader = new FileReader();
      reader.onload = function(e) {
        $('#showImage').attr('src', e.target.result);
      }
      reader.readAsDataURL(e.target.files['0']);
    })
  })
</script>

@endsection
