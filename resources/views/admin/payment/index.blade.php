@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">All Payment</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Payment</li>
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

                        <h4 class="card-title">All Payment Data</h4>

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Status</th>
                                    <th>Ref</th>
                                    <th>Course</th>
                                    <th>Payment Method</th>
                                    <th>Price</th>
                                    <th>Picture</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>
                                @foreach ($payments as $payment)
                                    <tr>
                                        <td>{{ $payment->payment_status }}</td>
                                        <td>#{{ $payment->payment_ref }}</td>
                                        <td>{{ $payment->course->course_name }}</td>
                                        <td>{{ $payment->payment_method->payment_name }}</td>
                                        <td>Rp. {{ number_format($payment->payment_price, 0) }}</td>
                                        {{-- <td><img src="{{ asset('storage/' . $payment->payment_picture) }}" class="img-fluid" alt=""></td> --}}
                                        <td>
                                            <a href="{{ asset('storage/' . $payment->payment_picture) }}" clas data-fancybox="" class="play-btn popup-image">Show Picture </a>
                                        </td>
                                        <td>
                                            {{-- <a href="{{ route('admin.course.show', $course->id) }}" class="btn btn-success sm" title="Show Data"><i class="fas fa-eye"></i></a>
                                            <a href="{{ route('admin.course.edit', $course->id) }}" class="btn btn-info sm" title="Edit Data"><i class="fas fa-edit"></i></a>
                                            <a href="{{ route('admin.course.delete', $course->id) }}" class="btn btn-danger sm" title="Delete Data" id="delete"><i class="fas fa-trash-alt"></i></a> --}}
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
