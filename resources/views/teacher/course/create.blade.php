@extends('teacher.teacher_master')
@section('teacher')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<div class="page-content">
  <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Add Category</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('teacher.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('teacher.course.index') }}">Category</a></li>
                        <li class="breadcrumb-item active">Add</li>
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

                <h4 class="card-title">Add Category </h4>

                <form method="post" action="{{ route('teacher.course.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-3">
                        <label for="category_id" class="col-sm-2 col-form-label">Category</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default Select Example" name="category_id" id="category_id">
                                <option>Open this select menu</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ ($category->id == old('category_id') ? 'selected' : '') }}>{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                            @error('category_id') <span class="text-danger"> {{ $message }}</span> @enderror
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="course_name" class="col-sm-2 col-form-label">Course Name</label>
                        <div class="col-sm-10">
                            <input name="course_name" class="form-control" type="text" value="{{ old('course_name') }}" id="course_name">
                            @error('course_name')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="price_old" class="col-sm-2 col-form-label">Price Old</label>
                        <div class="col-sm-10">
                            <input name="price_old" class="form-control" type="number" value="{{ old('price_old') }}" id="price_old">
                            @error('price_old')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="price_new" class="col-sm-2 col-form-label">Price New</label>
                        <div class="col-sm-10">
                            <input name="price_new" class="form-control" type="number" value="{{ old('price_new') }}" id="price_new">
                            @error('price_new')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="course_subscribe" class="col-sm-2 col-form-label">Course Duration (Day)<span class="btn btn-sm btn-warning rounded-pill">Leave blank if lifetime</span></label>
                        <div class="col-sm-10">
                            <input name="course_subscribe" class="form-control" type="number" value="{{ old('course_subscribe') }}" id="course_subscribe">
                            @error('course_subscribe')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
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
                        <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                        <div class="col-sm-10">
                            <img id="showImage" class="img-fluid img-thumbnail" src="{{ asset('backend/assets/images/no-image.jpg') }}" alt="Image Show">
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="course_desc" class="col-sm-2 col-form-label">Course Description</label>
                        <div class="col-sm-10">
                            <textarea name="course_desc" id="elm1" cols="30" rows="10">{{ old('course_desc') }}</textarea>
                            @error('course_desc')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- end row -->

                    <input type="submit" class="btn btn-info waves-effect waves-light" value="Insert Course Data">
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
