@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<div class="page-content">
  <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Profile</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Profile</li>
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

                <h4 class="card-title">Profile </h4>

                <form method="post" action="{{ route('profile.update', $user->id) }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-3">
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input name="username" class="form-control" type="text" value="{{ $user->username }}" id="username">
                            @error('username')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Full Name</label>
                        <div class="col-sm-10">
                            <input name="name" class="form-control" type="text" value="{{ $user->name }}" id="name">
                            @error('name')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input name="email" class="form-control" type="email" value="{{ $user->email }}" id="email" readonly>
                            @error('email')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="wa_number" class="col-sm-2 col-form-label">Wa Number</label>
                        <div class="col-sm-10">
                            <input name="wa_number" class="form-control" type="number" value="{{ $user->wa_number }}" id="wa_number">
                            @error('wa_number')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- end row -->



                    <div class="row mb-3">
                        <label for="password" class="col-sm-2 col-form-label">New Password <span class="badge rounded-pill bg-info">Optional</span></label>
                        <div class="col-sm-10">
                            <input name="password" class="form-control" type="password" id="password">
                            @error('password')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="confirm_password" class="col-sm-2 col-form-label">Confirmation Password</label>
                        <div class="col-sm-10">
                            <input name="confirm_password" class="form-control" type="password" id="confirm_password">
                            @error('confirm_password')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="user_picture" class="col-sm-2 col-form-label">Banner Image (Optional)</label>
                        <div class="col-sm-10">
                          <input name="user_picture" class="form-control" type="file"  id="user_picture">
                              @error('user_picture')
                                  <span class="text-danger"> {{ $message }}</span>
                              @enderror
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <a href="{{ asset('storage/' . $user->user_picture) }}" clas data-fancybox="" class="play-btn popup-image">
                                <img id="show_user_picture" class="rounded avatar-lg" src="{{ asset('storage/' . $user->user_picture) }}" alt="Image Show">
                            </a>
                        </div>
                    </div>
                    <!-- end row -->




                  <!-- end row -->
                    <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Profile">
                  </form>

              </div>
          </div>

  </div>
</div>

<script>
  $(document).ready(function() {
    $('#user_picture').change(function(e) {
      const reader = new FileReader();
      reader.onload = function(e) {
        $('#show_user_picture').attr('src', e.target.result);
      }
      reader.readAsDataURL(e.target.files['0']);
    })
  })
</script>

@endsection
