@extends('user.user_master')
@section('user')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">All Payment</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Payment</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <a href="{{ route('user.payment.create') }}" class="btn btn-primary mb-2">Add Payment</a>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">All Payment Data</h4>

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Ref</th>
                                    <th>Course</th>
                                    <th>Payment Method</th>
                                    <th>Price</th>
                                    <th>Picture</th>
                                    <th>Status</th>
                                    <th>Time</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>
                                @php($i = 1)
                                @foreach ($payments as $payment)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>#{{ $payment->payment_ref }}</td>
                                        <td>{{ $payment->course->course_name }}</td>
                                        <td>{{ $payment->payment_method->payment_method }}</td>
                                        <td>Rp. {{ number_format($payment->payment_price, 0) }}</td>
                                        <td>
                                            <a href="{{ asset('storage/' . $payment->payment_picture) }}" class="popup-image">
                                                <img src="{{ asset('storage/' . $payment->payment_picture) }}" alt="payment picture" style="width: 50px; height: 50px">
                                            </a>
                                        </td>
                                        <td>{{ $payment->payment_status }}</td>
                                        <td>{{ \Carbon\Carbon::parse($payment->created_at)->format('d M Y') }}</td>
                                        <td>
                                            <a href="https://wa.me/{{ \App\Models\Setting::first()->no_phone }}" class="btn btn-success sm" title="Chat Admin"><i class=" fab fa-whatsapp"></i></a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
</div>
@endsection
