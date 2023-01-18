@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<div class="page-content">
  <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Edit Course</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.course.index') }}">Course</a></li>
                        <li class="breadcrumb-item active">Edit</li>
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

                <h4 class="card-title">Edit Course </h4>

                <form method="post" action="{{ route('admin.course.update', $course->id) }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-3">
                        <label for="category_id" class="col-sm-2 col-form-label">Category</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default Select Example" name="category_id" id="category_id">
                                <option>Open this select menu</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ ($category->id == $course->category_id ? 'selected' : '') }}>{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                            @error('category_id') <span class="text-danger"> {{ $message }}</span> @enderror
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="course_name" class="col-sm-2 col-form-label">Course Name</label>
                        <div class="col-sm-10">
                            <input name="course_name" class="form-control" type="text" value="{{ $course->course_name }}" id="course_name">
                            @error('course_name')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="course_price" class="col-sm-2 col-form-label">Course Price</label>
                        <div class="col-sm-10">
                            <input name="course_price" class="form-control" type="number" value="{{ $course->course_price }}" id="course_price">
                            @error('course_price')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="course_subscribe" class="col-sm-2 col-form-label">Course Duration (Day)<span class="btn btn-sm btn-warning rounded-pill">Leave blank if lifetime</span></label>
                        <div class="col-sm-10">
                            <input name="course_subscribe" class="form-control" type="number" value="{{ $course->course_subscribe }}" id="course_subscribe">
                            @error('course_subscribe')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="admin_percentage" class="col-sm-2 col-form-label">Admin Percentage</label>
                        <div class="col-sm-10">
                            <input name="admin_percentage" class="form-control" type="number" value="{{ $course->admin_percentage }}" id="admin_percentage">
                            @error('admin_percentage')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="teacher_percentage" class="col-sm-2 col-form-label">Teacher Percentage</label>
                        <div class="col-sm-10">
                            <input name="teacher_percentage" class="form-control" type="number" value="{{ $course->teacher_percentage }}" id="teacher_percentage">
                            @error('teacher_percentage')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="affiliate_percentage" class="col-sm-2 col-form-label">Affiliate Percentage</label>
                        <div class="col-sm-10">
                            <input name="affiliate_percentage" class="form-control" type="number" value="{{ $course->affiliate_percentage }}" id="affiliate_percentage">
                            @error('affiliate_percentage')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="course_status" class="col-sm-2 col-form-label">Course Status</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default Select Example" name="course_status" id="course_status">
                                <option>Open this select menu</option>
                                    <option value="ARCHIVE" {{ ($course->course_status == 'ARCHIVE' ? 'selected' : '') }}>ARCHIVE</option>
                                    <option value="PENDING" {{ ($course->course_status == 'PENDING' ? 'selected' : '') }}>PENDING</option>
                                    <option value="ACTIVE" {{ ($course->course_status == 'ACTIVE' ? 'selected' : '') }}>ACTIVE</option>
                            </select>
                            @error('course_status') <span class="text-danger"> {{ $message }}</span> @enderror
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="course_picture" class="col-sm-2 col-form-label">Course Picture </label>
                        <div class="col-sm-10">
                            <input name="course_picture" class="form-control" type="file"  id="image">
                                @error('course_picture')
                                    <span class="text-danger"> {{ $message }}</span>
                                @enderror
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <img id="showImage" class="img-fluid img-thumbnail" src="{{ asset('storage/' . $course->course_picture) }}" alt="Image Show">
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="course_desc" class="col-sm-2 col-form-label">Course Description</label>
                        <div class="col-sm-10">
                            <textarea name="course_desc" id="elm1" cols="30" rows="10">{{ $course->course_desc }}</textarea>
                            @error('course_desc')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- end row -->

                    <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Course Data">
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
