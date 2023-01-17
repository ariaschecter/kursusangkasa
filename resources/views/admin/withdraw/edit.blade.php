@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<div class="page-content">
  <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Edit Withdraw</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.withdraw.index') }}">Withdraw</a></li>
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

                <h4 class="card-title">Wallet Detail</h4>

                <div class="row mb-3">
                    <label for="wallet_method" class="col-sm-2 col-form-label">Wallet Method</label>
                    <div class="col-sm-10">
                        <input name="wallet_method" class="form-control" type="text" value="{{ $history->wallet->wallet_method }}" id="wallet_method" readonly>
                        @error('wallet_method')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <!-- end row -->

                <div class="row mb-3">
                    <label for="payment_name" class="col-sm-2 col-form-label">Wallet Name</label>
                    <div class="col-sm-10">
                        <input name="payment_name" class="form-control" type="text" value="{{ $history->wallet->wallet_name }}" id="payment_name" readonly>
                        @error('payment_name')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <!-- end row -->

                <div class="row mb-3">
                    <label for="payment_rekening" class="col-sm-2 col-form-label">Wallet Rekening</label>
                    <div class="col-sm-10">
                        <input name="payment_rekening" class="form-control" type="text" value="{{ $history->wallet->wallet_rekening }}" id="payment_rekening" readonly>
                        @error('payment_rekening')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <!-- end row -->

                <h4 class="card-title">Withdraw Detail</h4>

                <form method="post" action="{{ route('admin.withdraw.update', $history->id) }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-3">
                        <label for="wallet_history_money" class="col-sm-2 col-form-label">Withdraw Amount</label>
                        <div class="col-sm-10">
                            <input name="wallet_history_money" class="form-control" type="text" value="{{ $history->wallet_history_money }}" id="wallet_history_money" readonly>
                            @error('wallet_history_money')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="wallet_history_status" class="col-sm-2 col-form-label">Withdraw Status</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default Select Example" name="wallet_history_status" id="wallet_history_status">
                                <option>Open this select menu</option>

                                <option value="PENDING" {{ ('PENDING' == $history->wallet_history_status ? 'selected' : '') }}>PENDING</option>
                                <option value="WRONG" {{ ('' == $history->wallet_history_status ? 'selected' : '') }}>WRONG WALLET METHOD</option>
                                <option value="SUCCESS" {{ ('' == $history->wallet_history_status ? 'selected' : '') }}>SUCCESS</option>

                            </select>
                            @error('wallet_history_status') <span class="text-danger"> {{ $message }}</span> @enderror
                        </div>
                    </div>
                    <!-- end row -->

                    <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Withdraw Data">
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
