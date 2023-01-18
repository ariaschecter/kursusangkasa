@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<div class="page-content">
  <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Setting</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Setting</li>
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

                <h4 class="card-title">Setting </h4>

                <form method="post" action="{{ route('admin.setting.update', $setting->id) }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-3">
                        <label for="min_withdraw" class="col-sm-2 col-form-label">Minimal Withdraw</label>
                        <div class="col-sm-10">
                            <input name="min_withdraw" class="form-control" type="text" value="{{ $setting->min_withdraw }}" id="min_withdraw">
                            @error('min_withdraw')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- end row -->

                    <h4 class="card-title">Affiliate</h4>

                    <div class="row mb-3">
                        <label for="presentase_admin" class="col-sm-2 col-form-label">Presentase Admin</label>
                        <div class="col-sm-10">
                            <input name="presentase_admin" class="form-control" type="text" value="{{ $setting->presentase_admin }}" id="presentase_admin">
                            @error('presentase_admin')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="presentase_teacher" class="col-sm-2 col-form-label">Presentase Teacher</label>
                        <div class="col-sm-10">
                            <input name="presentase_teacher" class="form-control" type="text" value="{{ $setting->presentase_teacher }}" id="presentase_teacher">
                            @error('presentase_teacher')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="presentase_affiliate" class="col-sm-2 col-form-label">Presentase Affiliate</label>
                        <div class="col-sm-10">
                            <input name="presentase_affiliate" class="form-control" type="text" value="{{ $setting->presentase_affiliate }}" id="presentase_affiliate">
                            @error('presentase_affiliate')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="default_affiliate" class="col-sm-2 col-form-label">Default Affiliate (Admin)</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default Select Example" name="default_affiliate" id="default_affiliate">
                                <option>Open this select menu</option>
                                @foreach ($admins as $admin)
                                    <option value="{{ $admin->id }}" {{ ($admin->id == $setting->default_affiliate ? 'selected' : '') }}>{{ $admin->name }}</option>
                                @endforeach
                            </select>
                            @error('default_affiliate') <span class="text-danger"> {{ $message }}</span> @enderror
                        </div>
                    </div>
                    <!-- end row -->

                    <h4 class="card-title">Home</h4>

                    <div class="row mb-3">
                        <label for="hero_image" class="col-sm-2 col-form-label">Hero Image </label>
                        <div class="col-sm-10">
                          <input name="hero_image" class="form-control" type="file"  id="image">
                              @error('hero_image')
                                  <span class="text-danger"> {{ $message }}</span>
                              @enderror
                        </div>
                    </div>
                    <!-- end row -->

                      <div class="row mb-3">
                         <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                        <div class="col-sm-10">
                            <img id="showImage" class="img-fluid img-thumbnail" src="" alt="Image Show">
                            {{-- {{ asset('storage/' . $setting->hero_image) }} --}}
                        </div>
                    </div>
                    <!-- end row -->

                    <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Setting Data">
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
