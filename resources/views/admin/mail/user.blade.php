@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<div class="page-content">
  <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Email Controller</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Email</li>
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


                <form method="post" action="{{ route('admin.mail.store') }}" enctype="multipart/form-data">
                    @csrf

                    <h4 class="card-title">Email </h4>

                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default Select Example" name="email" id="email">
                                @foreach ($users as $user)
                                    <option value="{{ $user->email }}" {{ ($user->email == old('email') ? 'selected' : '') }}>{{ $user->email }}</option>
                                @endforeach
                            </select>
                            @error('email') <span class="text-danger"> {{ $message }}</span> @enderror
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="subject" class="col-sm-2 col-form-label">Subject</label>
                        <div class="col-sm-10">
                            <input name="subject" class="form-control" type="text" value="{{ old('subject') }}" id="subject">
                            @error('subject')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="message" class="col-sm-2 col-form-label">Message</label>
                        <div class="col-sm-10">
                            <textarea name="message" id="elm1" class="form-control" cols="30" rows="10">{{ old('message') }}</textarea>
                            @error('message')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- end row -->



                    <input type="submit" class="btn btn-info waves-effect waves-light" value="Sent Email">
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
