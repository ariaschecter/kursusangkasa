@extends('teacher.teacher_master')
@section('teacher')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<div class="page-content">
  <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Teacher</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('teacher.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Teacher</li>
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


                <form method="post" action="{{ route('teacher.teacher.update') }}" enctype="multipart/form-data">
                    @csrf

                    <h4 class="card-title">Frontend </h4>

                    <div class="row mb-3">
                        <label for="teacher_tag" class="col-sm-2 col-form-label">Tagline</label>
                        <div class="col-sm-10">
                            <input name="teacher_tag" class="form-control" type="text" value="{{ $teacher->teacher_tag }}" id="teacher_tag">
                            @error('teacher_tag')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="teacher_bio" class="col-sm-2 col-form-label">Teacher Bio</label>
                        <div class="col-sm-10">
                            <textarea name="teacher_bio" class="form-control" cols="30" rows="10">{{ $teacher->teacher_bio }}</textarea>
                            @error('teacher_bio')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- end row -->



                    <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Teacher Bio">
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
