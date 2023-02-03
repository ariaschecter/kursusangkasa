@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<div class="page-content">
  <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Add Testimoni</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.testimoni.index') }}">Testimoni</a></li>
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

                <h4 class="card-title">Add Testimoni </h4>

                <form method="post" action="{{ route('admin.testimoni.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-3">
                        <label for="testimoni_name" class="col-sm-2 col-form-label">Testimoni Name</label>
                        <div class="col-sm-10">
                            <input name="testimoni_name" class="form-control" type="text" value="{{ old('testimoni_name') }}" id="testimoni_name">
                            @error('testimoni_name')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="testimoni_feedback" class="col-sm-2 col-form-label">Testimoni Feedback</label>
                        <div class="col-sm-10">
                            <textarea name="testimoni_feedback" class="form-control" cols="30" rows="10">{{ old('testimoni_feedback') }}</textarea>
                            @error('testimoni_feedback')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- end row -->

                  <div class="row mb-3">
                      <label for="testimoni_picture" class="col-sm-2 col-form-label">Testimoni Picture </label>
                      <div class="col-sm-10">
                        <input name="testimoni_picture" class="form-control" type="file"  id="image">
                            @error('testimoni_picture')
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
                    <input type="submit" class="btn btn-info waves-effect waves-light" value="Insert Testimoni Data">
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
