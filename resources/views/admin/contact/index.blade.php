@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">All Contacts</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Contacts</li>
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

                        <h4 class="card-title">All Contacts Data</h4>

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>
                                @php($i = 1)
                                @foreach ($contacts as $contact)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $contact->contact_name }}</td>
                                        <td><a href="mailto:{{ $contact->contact_email }}">{{ $contact->contact_email }}</a></td>
                                        <td>{{ $contact->contact_subject }}</td>
                                        <td>{{ $contact->contact_message }}</td>
                                        <td>{{ \Carbon\Carbon::parse($contact->created_at)->format('d M Y') }}</td>
                                        <td>
                                            <a href="{{ route('admin.contact.delete', $contact->id) }}" class="btn btn-danger sm" title="Delete Data" id="delete"><i class="fas fa-trash-alt"></i></a>
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
