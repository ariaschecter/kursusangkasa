@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">All Category Archive</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.category.index') }}">Category</a></li>
                            <li class="breadcrumb-item active">Archive</li>
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

                        <h4 class="card-title">All Category Archive Data</h4>

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category Name</th>
                                    <th>Category Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>
                                @php($i = 1)
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $category->category_name }}</td>
                                        <td>
                                            <a href="{{ asset('storage/' . $category->category_picture) }}" class="popup-image">
                                                <img src="{{ asset('storage/' . $category->category_picture) }}" alt="category picture" style="width: 50px; height: 50px">
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.category.restore', $category->id) }}" class="btn btn-primary sm" title="Delete Data" id="restore"><i class="fas fa-trash-restore-alt"></i></a>
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
