@extends('teacher.teacher_master')
@section('teacher')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<div class="page-content">
  <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Edit List Course</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('teacher.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('teacher.course.show', $course->course_slug) }}">{{ $course->course_name }}</a></li>
                        <li class="breadcrumb-item active">Edit List Course</li>
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

                <h4 class="card-title">Edit List Course </h4>

                <form method="post" action="{{ route('teacher.list_course.update', $listcourse->list_course_slug) }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-3">
                        <label for="sub_course_id" class="col-sm-2 col-form-label">Sub Course</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default Select Example" name="sub_course_id" id="sub_course_id">
                                <option>Open this select menu</option>
                                @foreach ($course->sub_course as $sub_course)
                                    <option value="{{ $sub_course->id }}" {{ ($sub_course->id == $listcourse->sub_course_id ? 'selected' : '') }}>{{ $sub_course->sub_course_name }}</option>
                                @endforeach
                            </select>
                            @error('sub_course_id') <span class="text-danger"> {{ $message }}</span> @enderror
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="list_course_name" class="col-sm-2 col-form-label">List Course Name</label>
                        <div class="col-sm-10">
                            <input name="list_course_name" class="form-control" type="text" value="{{ $listcourse->list_course_name }}" id="list_course_name">
                            @error('list_course_name')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="list_course_link" class="col-sm-2 col-form-label">List Course Link</label>
                        <div class="col-sm-10">
                            <input name="list_course_link" class="form-control" type="text" value="{{ $listcourse->list_course_link }}" id="list_course_link" placeholder="abcdefgh">
                            <span class="text-muted">ex "abcdefgh"</span>
                            @error('list_course_link')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- end row -->

                    <input type="submit" class="btn btn-info waves-effect waves-light" value="Insert List Course Data">
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
