@extends('teacher.teacher_master')
@section('teacher')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<div class="page-content">
  <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Edit Wallet Method</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('teacher.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('teacher.wallet.index') }}">Wallet</a></li>
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

                <h4 class="card-title">Edit Wallet Method </h4>

                <form method="post" action="{{ route('teacher.wallet.update', $wallet->id) }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-3">
                        <label for="wallet_method" class="col-sm-2 col-form-label">Wallet Method</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default Select Example" name="wallet_method" id="wallet_method">
                                @foreach ($payment_methods as $payment_method)
                                    <option value="{{ $payment_method->id }}" {{ ($payment_method->id == $wallet->wallet_method ? 'selected' : '') }}>{{ $payment_method->payment_method }}</option>
                                @endforeach
                            </select>
                            @error('wallet_method') <span class="text-danger"> {{ $message }}</span> @enderror
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="wallet_name" class="col-sm-2 col-form-label">Wallet Name</label>
                        <div class="col-sm-10">
                            <input name="wallet_name" class="form-control" type="text" value="{{ $wallet->wallet_name }}" id="wallet_name" placeholder="Fullname On Wallet Method">
                            @error('wallet_name')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="wallet_rekening" class="col-sm-2 col-form-label">Wallet Rekening</label>
                        <div class="col-sm-10">
                            <input name="wallet_rekening" class="form-control" type="text" value="{{ $wallet->wallet_rekening }}" id="wallet_rekening" placeholder="Number On Your Wallet">
                            @error('wallet_rekening')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- end row -->


                    <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Wallet Data">
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
