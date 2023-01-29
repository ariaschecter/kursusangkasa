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

                <form method="post" action="{{ route('admin.setting.image.update', $setting->id) }}" enctype="multipart/form-data">
                    @csrf

                    <h4 class="card-title">Home</h4>

                    <div class="row mb-3">
                        <label for="hero_image" class="col-sm-2 col-form-label">Hero Image (735 x 835)</label>
                        <div class="col-sm-10">
                          <input name="hero_image" class="form-control" type="file"  id="hero_image">
                              @error('hero_image')
                                  <span class="text-danger"> {{ $message }}</span>
                              @enderror
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <a href="{{ asset('storage/' . $setting->hero_image) }}" clas data-fancybox="" class="play-btn popup-image">
                                <img id="show_hero_image" class="rounded avatar-lg" src="{{ asset('storage/' . $setting->hero_image) }}" alt="Image Show">
                            </a>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="banner_image" class="col-sm-2 col-form-label">Banner Image (1920 x 1280)</label>
                        <div class="col-sm-10">
                          <input name="banner_image" class="form-control" type="file"  id="banner_image">
                              @error('banner_image')
                                  <span class="text-danger"> {{ $message }}</span>
                              @enderror
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <a href="{{ asset('storage/' . $setting->banner_image) }}" clas data-fancybox="" class="play-btn popup-image">
                                <img id="show_banner_image" class="rounded avatar-lg" src="{{ asset('storage/' . $setting->banner_image) }}" alt="Image Show">
                            </a>
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
    $('#hero_image').change(function(e) {
      const reader = new FileReader();
      reader.onload = function(e) {
        $('#show_hero_image').attr('src', e.target.result);
      }
      reader.readAsDataURL(e.target.files['0']);
    })
  })
</script>

<script>
  $(document).ready(function() {
    $('#banner_image').change(function(e) {
      const reader = new FileReader();
      reader.onload = function(e) {
        $('#show_banner_image').attr('src', e.target.result);
      }
      reader.readAsDataURL(e.target.files['0']);
    })
  })
</script>

@endsection
