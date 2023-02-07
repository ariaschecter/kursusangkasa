@extends('user.user_master')
@section('user')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<div class="page-content">
  <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Add Payment</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('user.payment.index') }}">Payment</a></li>
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

                <h4 class="card-title">Add Payment </h4>

                <form method="post" action="{{ route('user.payment.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-3">
                        <label for="order_id" class="col-sm-2 col-form-label">Order</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default Select Example" name="order_id" id="order_id">
                                <option>Open this select menu</option>
                                @foreach ($orders as $order)
                                    <option value="{{ $order->id }}" {{ ($order->id == old('order_id') ? 'selected' : '') }}>
                                        #{{ $order->order_ref . ' - ' . $order->course->course_name . ' - Rp. ' . number_format($order->order_price) }}
                                    </option>
                                @endforeach
                            </select>
                            @error('order_id') <span class="text-danger"> {{ $message }}</span> @enderror
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="payment_method_id" class="col-sm-2 col-form-label">Payment Method</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default Select Example" name="payment_method_id" id="payment_method_id">
                                <option>Open this select menu</option>
                                @foreach ($payment_methods as $payment_method)
                                    <option value="{{ $payment_method->id }}" {{ ($payment_method->id == old('payment_method_id') ? 'selected' : '') }}>{{ $payment_method->payment_method . ' - ' . $payment_method->payment_rekening . ' a.n. ' . $payment_method->payment_name }}</option>
                                @endforeach
                            </select>
                            @error('payment_method_id') <span class="text-danger"> {{ $message }}</span> @enderror
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="payment_picture" class="col-sm-2 col-form-label">Payment Picture </label>
                        <div class="col-sm-10">
                            <input name="payment_picture" class="form-control" type="file"  id="image">
                                @error('payment_picture')
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

                    <input type="submit" class="btn btn-info waves-effect waves-light" value="Insert Payment Data">
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
