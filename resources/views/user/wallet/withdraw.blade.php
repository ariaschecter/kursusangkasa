@extends('user.user_master')
@section('user')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<div class="page-content">
  <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Withdraw</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('user.wallet.index') }}">Wallet</a></li>
                        <li class="breadcrumb-item active">Withdraw</li>
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

                <h4 class="card-title">Withdraw </h4>

                <form method="post" action="{{ route('user.wallet.withdraw.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-3">
                        <label for="input_withdraw" class="col-sm-2 col-form-label">Input Withdraw</label>
                        <div class="col-sm-10">
                            <input name="input_withdraw" class="form-control" type="number" value="{{ old('input_withdraw') }}" id="input_withdraw" placeholder="Max : {{ $wallet->wallet_amount }}">
                            @error('input_withdraw')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- end row -->


                    <input type="submit" class="btn btn-info waves-effect waves-light" value="Withdraw Money">
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
