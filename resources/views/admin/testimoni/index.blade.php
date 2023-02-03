@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">All Testimoni</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Testimoni</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <a href="{{ route('admin.testimoni.add') }}" class="btn btn-primary mb-2">Add Testimoni</a>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">All Testimoni Data</h4>

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Testimoni Name</th>
                                    <th>Testimoni Image</th>
                                    <th>Testimoni Feedback</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>
                                @php($i = 1)
                                @foreach ($testimonis as $testimoni)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $testimoni->testimoni_name }}</td>
                                        <td>
                                            <a href="{{ asset('storage/' . $testimoni->testimoni_picture) }}" class="popup-image">
                                                <img src="{{ asset('storage/' . $testimoni->testimoni_picture) }}" alt="testimoni picture" style="width: 50px; height: 50px">
                                            </a>
                                        </td>
                                        <td>{{ $testimoni->testimoni_feedback }}</td>
                                        <td>
                                            <a href="{{ route('admin.testimoni.edit', $testimoni->id) }}" class="btn btn-info sm" title="Edit Data"><i class="fas fa-edit"></i></a>
                                            <a href="{{ route('admin.testimoni.delete', $testimoni->id) }}" class="btn btn-danger sm" title="Delete Data" id="delete"><i class="fas fa-trash-alt"></i></a>
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
